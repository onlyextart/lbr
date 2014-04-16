<?php
class FileuploaderWidget extends CWidget{
    
    /**
     * Пример добавления виджета на страницу
     *  $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
     *          'url'=>'/administrator/fileuploader/upload'
     *          'deleteUrl'=>'/administrator/fileuploader/delete'
     *          'template'=>array(
     *              'image',
     *              array(
     *                  'name'=>'radioButton',
     *                  'label'=>'Логотип ',
     *                  'nameAttr'=>'Makers[logo]',
     *              ),
     *              'deleteButton',
     *              array(
     *                  'name'=>'hiddenField',
     *                  'nameAttr'=>'imagePath[]', //default - imagePath[]
     *              )
     *          ),
     *          'previouslyUploadedFiles'=>array(
     *              '/images/uploaded/image_01.jpg'=>array('radioButton'=>'checked'),
     *              '/images/uploaded/image_02.jpg',
     *          ),
     *          'resize'=>array(
     *              'width'=>'100',
     *              'height'=>'80',
     *          ),
     *          'uploadCallback'=>'function( $newUploadedFileWrapper ){alert("file uploaded")}',
     *          'postParams'=>array(
     *              'postParam_1'=>'postValue_1'  
     *          ),
     *      )
     *  );
     */
    
    private $widgetPath;
    
    /**
     * Путь к скрипту загрузчику
     */
    public $url = '/administrator/fileuploader/upload/';
    
    /**
     * Путь к скрипту удаления файлов
     */
    public $deleteUrl = '/administrator/fileuploader/delete/';
   
    /**
     * javascript функция вызываемая после загрузки файла
     */
    public $uploadCallback = 'function(){}';
    
    /**
     * Массив элементов которые будут отображены вместе с файлом после загрузки
     */
    public $template;
    
    /**
     * Массив параметров которые будут переданы вместе с файлом загрузчику в массиве $_POST
     */
    public $postParams = array();
    
    /**
     * Массив примимает параметры int height, int width и bool crop. 
     * Размер изображения после загрузки будет преобразован
     * в соответствии с этими параметрами. Если задан один параметр,
     * размер изображения будет изменен пропорционально. 
     * Остальные параметры массива будут проигнорированы.
     */
    public $resize = array();
    
    /**
     * Массив ранее загруженных файлов. Ключ массива - путь к файлу,
     * значение массива - массив параметров:
     */
    public $previouslyUploadedFiles = array();
    
    /**
     * Путь к изображению кнопки удаления файла
     */
    public $deleteImgPath = '';
    
    /**
     * Изображение-заглушка для шаблона, которое будет заменено загруженным изображением.
     */
    public $imagePathPlaceholder = '';
    
    /**
     * Путь к файлу стилей
     */
    public $cssFile = 'css/style.css';
    
    public function init(){
        $cs = Yii::app()->clientScript;
        $this->widgetPath = dirname(__FILE__).DIRECTORY_SEPARATOR;
        
        $cs->registerCssFile(Yii::app()->getAssetManager()->publish($this->widgetPath.$this->cssFile));
        $cs->registerScriptFile(Yii::app()->getAssetManager()->publish($this->widgetPath.'js/uploader.js'));
        $cs->registerCoreScript( 'jquery' );
        if( $this->deleteImgPath === ''){
            $this->deleteImgPath = Yii::app()->getAssetManager()->publish($this->widgetPath.'images/closeIcon.png');
        }
        if( $this->imagePathPlaceholder === ''){
            $this->imagePathPlaceholder = Yii::app()->getAssetManager()->publish($this->widgetPath.'images/imagePathPlaceholder.png');
        }
        
        foreach ($this->template as $i=>$templateItem){
            if(is_array($templateItem) && isset($templateItem['name'])){
                $this->template[$templateItem['name']]=$templateItem;
            }
            else{
                $this->template[$templateItem]='';
            }
        }
        $this->postParams['resize']=$this->resize;
    }
    
    public function run(){
        $this->render('index', array(
                'postParams'=>'{'.$this->paramsToJson( $this->postParams ).'}',
            )
        );
    }
    
    public function paramsToJson( $params , $paramPreName=""){
        $JSONParams = "";
        foreach($params as $paramName=>$paramValue){
            if( $paramPreName!="" ){
                $paramName = '['.$paramName.']';
            }
            if(!is_array($paramValue)){
                $JSONParams .= '"'.$paramPreName.$paramName.'":"'.$paramValue.'", ';
            }
            else{
                $JSONParams .= $this->paramsToJson($paramValue, $paramPreName.$paramName);
            }
        }
        return $JSONParams;
    }
}
?>
