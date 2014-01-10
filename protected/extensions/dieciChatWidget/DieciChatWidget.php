<?php
class DieciChatWidget extends CWidget
{
    
    public function init()
    {
        $dieci = array('845','847','861','844','846','860','848','850','852','854','856','858','862');
        $id = (int)Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        if(in_array($id, $dieci))
        {
            $this->render('index');
        }
    }

}
