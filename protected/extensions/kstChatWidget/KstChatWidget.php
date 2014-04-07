<?php
class KstChatWidget extends CWidget
{
    
    public function init()
    {
        $kst = array('891','1556','915','919','925','935','941','945','894','896','898','900','902','904','906','908',
        '910','916','920','922','928','926','930','932','936','938','1564','942','950','946');
        $id = (int)Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        if(in_array($id, $kst))
        {
            $this->render('index');
        }
    }

}
