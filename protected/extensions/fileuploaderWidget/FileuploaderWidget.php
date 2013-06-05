<?php
class FileuploaderWidget extends CWidget{
    
    public $url;
    public $uploadCallback;
    public $template;
    public $resizeByHeight;
    public $postParams = array();
    public $mode = 'loader';
    public $imagePath;
    
    public function init(){
        $cs=Yii::app()->clientScript;
        $scriptPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR;
        $cs->registerScriptFile(Yii::app()->getAssetManager()->publish($scriptPath.'uploader.js'));
        Yii::app()->clientScript->registerCoreScript('jquery');
        if( $this->template!==null ){
            $this->postParams['template']=$this->template;
        }
    }
    
    public function run(){
        if( $this->mode == 'loader' ){
            $this->render('index', array(
                    'postParams'=>'{'.$this->paramsToJson( $this->postParams ).'}' 
                )
            );
        }
        if( $this->mode == 'thumbnail' && isset( $this->imagePath ) ){
            $this->render('thumbnail', array(
                    //'postParams'=>'{'.$this->paramsToJson( $this->postParams ).'}' 
                )
            );
        }
        
    }
    
    private function paramsToJson( $params , $paramPreName=""){
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
