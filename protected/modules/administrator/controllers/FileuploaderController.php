<?php
class FileuploaderController extends Controller
{
    public $fileName;
    public $uploadDir = '/images/';
    public $fullImagePath;
    public function actionUpload()
    {
        //папка для хранения файлов
        (isset($_POST['uploadDir']))?$this->uploadDir = $_POST['uploadDir']:$this->uploadDir = '/images/uploaded/'; 
        $allowedExt = array('jpg', 'jpeg', 'png', 'gif');
        $maxFileSize = 5 * 1024 * 1024; //5 MB
        //если получен файл
        if (isset($_FILES) && !empty($_FILES)) {
            //проверяем размер и тип файла
            $ext_array = explode('.', $_FILES['Filedata']['name']);
            $ext = end($ext_array);
            if (!in_array($ext, $allowedExt)) {
                return;
            }
            if ($maxFileSize < $_FILES['Filedata']['size']) {
                return;
            }
            if (is_uploaded_file($_FILES['Filedata']['tmp_name'])) {
                $this->fileName = $this->uploadDir.$_FILES['Filedata']['name'];
                //если файл с таким именем уже существует...
                if (file_exists($_SERVER['DOCUMENT_ROOT'].$this->fileName)) {
                    //...добавляем текущее время к имени файла
                    $nameParts = explode('.', $_FILES['Filedata']['name']);
                    $nameParts[count($nameParts)-2] .= time();
                    $this->fileName = $this->uploadDir.implode('.', $nameParts);
                }
                //Полный путь к изображению
                $this->fullImagePath=$_SERVER['DOCUMENT_ROOT'].$this->fileName;
                //Сохранение файла
                move_uploaded_file($_FILES['Filedata']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$this->fileName);
                //Обработка файла
                $this->processImage();
                $this->renderPartial('index', array(), false, false);
            }
        }
    }
    
    private function processImage(){
        if(isset($_POST['resize']['width']) || $_POST['resize']['height'] ){
            $this->resizeImage($_POST['resize']['width'], $_POST['resize']['height']);
        }
    }
    
    private function resizeImage($width, $height){
        $image = new Imageedit();
        $image->load( $this->fullImagePath );
        
        if($width!=null && $height===null){
            $image->resizeToWidth($width);
        }
        if($width===null && $height!==null){
            $image->resizeToHeight($height);
        }
        if($width!==null && $height!==null){
            $image->resize($width, $height);
        }
        $image->save( $this->fullImagePath );
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
        $fullImagePath = $_SERVER['DOCUMENT_ROOT'].$_POST['path'];
        if (file_exists($fullImagePath)){
            unlink($fullImagePath);
            echo json_encode(array(
                'deleted'=>$_POST['path'],
                'removeWrapper' => 'true'
            ));
        }
        else{
            echo json_encode(array(
                'file does not exist.'=>$_POST['path'],
                'removeWrapper' => 'true'
            ));
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