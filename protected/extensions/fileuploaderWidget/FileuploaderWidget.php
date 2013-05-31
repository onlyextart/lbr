<?php
class FileuploaderWidget extends CWidget{
    
    public $url;
    public $uploadCallback;
    
    public function init(){
        $cs=Yii::app()->clientScript;
        $scriptPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR;
        $cs->registerScriptFile(Yii::app()->getAssetManager()->publish($scriptPath.'uploader.js'));
    }
    
    public function run(){
            
        $this->render('index', array('tabs'=>$tabs));
    }
}
?>
