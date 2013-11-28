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
        if($this->currentMenuItem->level == 1 || $this->currentMenuItem==null)
            return;
        //Yii::app()->clientScript->registerCssFile('/css/menuGroups.css');
        $this->menuBranch = Yii::app()->params['currentMenuBranch'];
        
        if($this->menuBranch[1]->alias=='tehnika'){
            $rootmenu = isset(Yii::app()->request->cookies['rootmenu']) ? Yii::app()->request->cookies['rootmenu']->value : null;
            if($rootmenu===null){
                $rootmenuModel=MenuItems::model()->find('path=:path', array(':path'=>'/selskohozyaystvennaya-tehnika/type'));
            }
            else{
                $rootmenuModel=MenuItems::model()->findByPk($rootmenu);
            }
            $this->currentMenuItem = $rootmenuModel->descendants()->find('alias=:alias', array(':alias'=>$this->menuBranch[3]->alias));
            
            $this->menuBranch=$this->currentMenuItem->ancestors()->findAll();
            array_push($this->menuBranch, $this->currentMenuItem);
        }
        else{
            $cookieRootmenuId = new CHttpCookie('rootmenu', $this->menuBranch[1]->id);
            $cookieRootmenuId->expire = time()+60*60*24*1; 
            Yii::app()->request->cookies['rootmenu'] = $cookieRootmenuId;
            $cookieRootmenuAlias = new CHttpCookie('rootmenualias', $this->menuBranch[1]->alias);
            $cookieRootmenuAlias->expire = time()+60*60*24*1; 
            Yii::app()->request->cookies['rootmenualias'] = $cookieRootmenuAlias;
        }
        
        if( $this->currentMenuItem->level > 2 ){
            $this->rootMenuItem = $this->currentMenuItem->ancestors()->find('level=2 AND published=1');
        }
        
        elseif( $this->currentMenuItem->level == 2 ){
            $this->rootMenuItem = $this->currentMenuItem;
        }
        
        elseif( $this->currentMenuItem->level == 1 ){
            $this->rootMenuItem = $this->currentMenuItem->children()->find( 
                array('order'=>'lft', 'condition'=>'published=1') 
            );
        }
        
        if($this->rootMenuItem===null)
            return;
        
        $this->firstLevelItems = $this->rootMenuItem->descendants()->with('group')->findAll(
                'level='.($this->startLevel).' AND published=1'
        );
        
        if(Yii::app()->params['currentMenuItem']->type!=MenuItems::BANNERS_MENU_ITEM_TYPE && Yii::app()->params['currentMenuItem']->type!=MenuItems::PRODUCT_MENU_ITEM_TYPE){
            return;
        }
        
        if( isset($this->menuBranch[2]) ){
            $this->secondLevelItems = $this->menuBranch[2]->descendants()->with('group')->findAll(
                    'level='.($this->startLevel+1).' AND published=1'
            );
        }
            
        if( isset($this->menuBranch[3]) ){
            $this->thirdLevelItems = $this->menuBranch[3]->descendants()->with('group')->findAll(
                    'level='.($this->startLevel+2).' AND published=1'
            );
        }
        /*TODO $this->fourthLevelItems должен выбираться из баннеров*/
        if( $this->currentMenuItem->level >= 5 ){
            $this->fourthLevelItems = $this->menuBranch[4]->descendants()->findAll(
                    'level='.($this->startLevel+3).' AND published=1'
            );
        }
    }
    
    public function run()
    {
        //$start = microtime(true);
        if($this->currentMenuItem->level!=1)
            $this->render('index');
        //echo(microtime(true)-$start);
    }
}
?>
