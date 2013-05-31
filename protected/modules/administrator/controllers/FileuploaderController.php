<?php
class FileuploaderController extends Controller
{
    /*
    'radioButton'=>'Pages[thumbnail]',
    'description'=>'GalleryExhibits[description]',
    'editButton'=>'true',
    'editorRatio'=>'189/142',
    'editorResize'=>'true',
    'editorResizeWidth'=>'189',
    'editorResizeHeight'=>'142',
    'deleteButton'=>'true',
    'hiddenInput'=>'GalleryExhibits[images]',
    'uploadDir'=>'images/uploaded/',
    'buildThumbnail'=>'true',
    'thubnailWidth'=>'107',
    'thubnailHeight'=>'81',
    */
    
    public $fileName;
    public $uploadDir;
    
    public function actionUpload()
    {
        //папка для хранения файлов
        (isset($_POST['uploadDir']))?$this->uploadDir = $_POST['uploadDir']:$this->uploadDir = 'images/uploaded/'; 
        $allowedExt = array('jpg', 'jpeg', 'png', 'gif');
        $maxFileSize = 2 * 1024 * 1024; //2 MB
        //если получен файл
        if (isset($_FILES)) {
            //проверяем размер и тип файла
            $ext = end(explode('.', strtolower($_FILES['Filedata']['name'])));
            if (!in_array($ext, $allowedExt)) {
                return;
            }
            if ($maxFileSize < $_FILES['Filedata']['size']) {
                return;
            }
            if (is_uploaded_file($_FILES['Filedata']['tmp_name'])) {
                $this->fileName = $this->uploadDir.$_FILES['Filedata']['name'];
                //если файл с таким именем уже существует...
                if (file_exists($this->fileName)) {
                    //...добавляем текущее время к имени файла
                    $nameParts = explode('.', $_FILES['Filedata']['name']);
                    $nameParts[count($nameParts)-2] .= time();
                    $this->fileName = $this->uploadDir.implode('.', $nameParts);
                }
                move_uploaded_file($_FILES['Filedata']['tmp_name'], $this->fileName);
                /*if($_POST['buildThumbnail']=='true'){
                    $this->buildThumbnail();
                }
                if(isset($_POST['resizeWidth']) || isset($_POST['resizeHeight'])){
                    $image = $this->resizeImage($_POST['resizeWidth'], $_POST['resizeHeight']);
                    $image->save($this->fileName);
                }*/
                $this->renderPartial('index');
            }
        }
    }
    
    public function actionEditimage(){
        $this->fileName = $_SERVER['DOCUMENT_ROOT'].$_POST['path'];
        if(file_exists($this->fileName)){
            $this->cropimage();
            if($_POST['resize']!='false'){
                $image = $this->resizeImage($_POST['resize']['width'], $_POST['resize']['height']);
                $image->save($this->fileName);
            }
        }
    }
    
   private function buildThumbnail(){
        $thumbnailWidth = null;
        $thumbnailHeight = null;
        if (isset($_POST['thubnailWidth'])){
            $thumbnailWidth=$_POST['thubnailWidth'];
        }
        if (isset($_POST['thubnailHeight'])){
            $thumbnailHeight=$_POST['thubnailHeight'];
        }
        if(isset($thumbnailWidth) || isset($thumbnailHeight)){
            $thmbnail = $this->resizeImage($thumbnailWidth, $thumbnailHeight);
            $thmbnail->save($this->uploadDir.'thumb_'.str_replace($this->uploadDir, "", $this->fileName));
        }
    }
    
    private function resizeImage($width, $height){
        if($width!=null && $height===null){
            $thImage = new Imageedit();
            $thImage->load($this->fileName);
            $thImage->resizeToWidth($width);
        }
        if($width===null && $height!==null){
            $thImage = new Imageedit();
            $thImage->load($this->fileName);
            $thImage->resizeToHeight($height);
        }
        if($width!==null && $height!==null){
            $thImage = new Imageedit();
            $thImage->load($this->fileName);
            $thImageWidth = $thImage->getWidth();
            $thImageHeight = $thImage->getHeight();
            $ratio = $width/$height;
            if ($thImageWidth>($thImageHeight*$ratio)){
                    $percent = $thImageWidth/100;
                    $cropFrom = (($thImageWidth-($thImageHeight*$ratio))/2)/$percent;
                    $cropTo = (($cropFrom*$percent)+$thImageHeight*$ratio)/$percent-$cropFrom;
                    $thImage->crop(array($cropFrom, 0, $cropTo, 100));
            }
            else{
                    $percent = $thImageHeight/100;
                    $cropFrom = (($thImageHeight-($thImageWidth/$ratio))/2)/$percent;
                    $cropTo = (($cropFrom*$percent)+$thImageWidth/$ratio)/$percent-$cropFrom;
                    $thImage->crop(array(0, $cropFrom, 100, $cropTo));
            }
            $thImage->resize($width, $height);
        }
        return $thImage;
    }
    
    private function cropimage(){
        $fullImagePath = $_SERVER['DOCUMENT_ROOT'].$_POST['path'];
        if(file_exists($fullImagePath)){
            $thImage = new Imageedit();
            $thImage->load($fullImagePath);
            $thImage->crop(array($_POST['coords']['cropFromX'], $_POST['coords']['cropFromY'], $_POST['coords']['cropToX'], $_POST['coords']['cropToY']));
            $thImage->save($fullImagePath);
            echo('true');
        }
    }
    
    public function actionDelete(){
        $fullImagePath = $_SERVER['DOCUMENT_ROOT'].'/'.$_POST['path'];
        if (file_exists($fullImagePath)){
            unlink($fullImagePath);
            echo 'true';
        }
    }
    public function actionGetthumbblock(){
        $fullImagePath = $_SERVER['DOCUMENT_ROOT'].'/'.$_POST['imagePath'];
        if (file_exists($fullImagePath)){
            $this->fileName = $_POST['imagePath'];
            $this->renderPartial('index', array('inputNameAttribute'=>$inputNameAttribute));
        }
    }
}
?>
