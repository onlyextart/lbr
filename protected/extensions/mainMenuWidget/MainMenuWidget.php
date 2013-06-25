<?php
class MainMenuWidget extends CWidget
{
    public $currentMenuItem;
    public $startLevel = 3;
    public $menuBranch;
    public $rootMenuItem;
    public $firstLevelItems = array();
    public $secondLevelItems = array();
    public $thirdLevelItems = array();
    public $fourthLevelItems = array();
    public function init()
    {
        $this->currentMenuItem = Yii::app()->params['currentMenuItem'];
        if($this->currentMenuItem->level == 1)
            return;
        //Yii::app()->clientScript->registerCssFile('/css/menuGroups.css');
        $this->menuBranch = Yii::app()->params['currentMenuBranch'];
        if( $this->currentMenuItem->level > 2 ){
            $this->rootMenuItem = $this->currentMenuItem->ancestors()->find('level=2');
        }
        elseif( $this->currentMenuItem->level == 2 ){
            $this->rootMenuItem = $this->currentMenuItem;
        }
        elseif( $this->currentMenuItem->level == 1 ){
            $this->rootMenuItem = $this->currentMenuItem->children()->find( 
                array('order'=>'lft') 
            );
        }
        
        if($this->rootMenuItem===null)
            return;
        
        $this->firstLevelItems = $this->rootMenuItem->descendants()->with('group')->findAll(
                'level='.($this->startLevel)
        );
        
        if( isset($this->menuBranch[2]) ){
            $this->secondLevelItems = $this->menuBranch[2]->descendants()->with('group')->findAll(
                    'level='.($this->startLevel+1)
            );
        }
        
        if( isset($this->menuBranch[3]) ){
            $this->thirdLevelItems = $this->menuBranch[3]->descendants()->with('group')->findAll(
                    'level='.($this->startLevel+2)
            );
        }
        /*TODO $this->fourthLevelItems должен быбираться из баннеров*/
        if( $this->currentMenuItem->level >= 5 ){
            $this->fourthLevelItems = $this->menuBranch[4]->descendants()->findAll(
                    'level='.($this->startLevel+3)
            );
        }
    }
    
    public function run()
    {
        $this->render('index');
    }
}
?>
