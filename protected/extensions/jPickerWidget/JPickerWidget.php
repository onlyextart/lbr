<?php
class JPickerWidget extends CWidget
{
    public $inputID;
    public $color;
    public $scriptFile;
    public $cssFile;
    public $settings = "{images:{clientPath: '/images/JPicker/'}}";
    public $commitCallback = "{}";
    public $liveCallback = "{}";
    public $cancelCallback = "{}";
    //{images:{clientPath: '/images/JPicker/'}}
    //jPicker([settings, [commitCallback, [liveCallback, [cancelCallback]]]])
    
    public function init()
    {
        $widgetPath=dirname(__FILE__).DIRECTORY_SEPARATOR;
        $this->scriptFile=Yii::app()->getAssetManager()->publish($widgetPath.'js/jpicker-1.1.6.js');
        $this->cssFile=Yii::app()->getAssetManager()->publish($widgetPath.'css/jPicker-1.1.6.css');
    }
    
    public function run()
    {
        $cs=Yii::app()->clientScript;
        $cs->registerScriptFile($this->scriptFile);    
        $cs->registerCssFile($this->cssFile);    
        $this->render('index');
    }
}
?>
