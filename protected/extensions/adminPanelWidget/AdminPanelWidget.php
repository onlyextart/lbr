<?php
class AdminPanelWidget extends CWidget {
    
    public function init()
    {
        if (Yii::app()->user->isGuest)
        {
            return false;
        }
        $id = (int)Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        $type = Yii::app()->db->createCommand()
                    ->select('type')
                    ->from('menu_items')
                    ->where('id=:id', array(':id'=>$id))
                    ->queryScalar();
        $user = Yii::app()->db->createCommand()
                    ->select('users.*, user_groups.name as group_name')
                    ->from('users')
                    ->join('user_groups', 'user_groups.id=users.group_id')
                    ->where('users.id=:id', array(':id'=>Yii::app()->user->getState('_id')))
                    ->queryRow();
        
        $this->render('index', array('type'=>(int)$type, 'user'=>$user));
    }
    public function console($array)
    {
        $this->render('console', array('data'=>$array));
    }
}

?>