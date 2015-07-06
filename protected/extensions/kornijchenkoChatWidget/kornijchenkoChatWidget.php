<?php
class KornijchenkoChatWidget extends CWidget
{
    
    public function init()
    {
        
        $kornijchenko = array('1151','1154','1575','1581', '1578','1580','1582','1584','1587','1588','1625','1609','1641','1642','1644','1645','1646','1647','1680','1344', '1345','1346','1347','1348','1349','1350','1351','1352','1353','1354','1355','1356','1357','1358','1359','1360',);
        $id = (int) Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        
       
        if(in_array($id, $kornijchenko))
        {
            
            $this->render('index');
        }
        }
    }


