<?php
class KlassikaChatWidget extends CWidget
{
    
    public function init()
    {
        $klassika = array('952','953','954','955','956','958','960','962','964','966','968','969','970','972','974','975','976','978','980',
            '982','984','986','988','990','992','993','994','996','998','1000','1002','1004','1006','1007','1008','1010','1011','1012','1014',
            '1016','1018','1020','1021','1022','1024','1026','1027','1028','1030','1032','1034','1035','1036','1038','1039','1040','1622','1623','1624','1628');
        $id = (int)Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        if(in_array($id, $klassika))
        {
            $this->render('index');
        }
    }

}