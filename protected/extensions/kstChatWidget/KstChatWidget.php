<?php
class KstChatWidget extends CWidget
{
    
    public function init()
    {
        $kst = array('890','891','892','894','896','898','900','902','904','906','908','910','912','914','915','916','918','920',
        '922','924','925','926','928','930','932','934','935','936','938','940','942','944','945','946','948','950');
        $id = (int)Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        if(in_array($id, $kst))
        {
            $this->render('index');
        }
    }

}
