<?php
class KornijchenkoChatWidget extends CWidget
{
    
    public function init()
    {
        $value = Yii::app()->session['lbrsession'];
        $kornijchenko = array('1151','1154','1575','1581', '1578','1580','1582','1584','1587','1588','1625','1609','1641','1642','1644','1645','1646','1647','1680',
            '1344', '1346','1348','1350','1352','1354','1356','1358','1360',);
        $id = (int) Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        
       
        if(in_array($id, $kornijchenko))
        {
            
            $this->render('index');
        }
        }
    }


