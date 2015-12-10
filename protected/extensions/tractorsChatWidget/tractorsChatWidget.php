<?php
class TractorsChatWidget extends CWidget
{
    
    public function init()
    {
        $tractors = array('796','797','798','799','800','802','804','806','808','810','812','813','814','816','818','820','822','824','826','828','830','831','832','834','836','838','840','842');
        $id = (int)Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        if(in_array($id, $tractors))
        {
            $this->render('index');
        }
    }

}
