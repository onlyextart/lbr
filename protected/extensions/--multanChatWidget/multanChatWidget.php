<?php
class MultanChatWidget extends CWidget {

    public function init() {

        $multan = array('891', '892', '893', '894', '896', '898', '900', '902', '904', '906', '908', '910', '912', '914', '915', '916', '918', '919', '920', '922', '924', '925', '926', '928', '930', '932', '934', '935', '936', '938', '940', '941', '942', '950', '1556');
        $id = (int) Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;


        if (in_array($id, $multan)) {

            $this->render('index');
        }
    }

}
