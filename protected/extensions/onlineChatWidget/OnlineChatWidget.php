<?php
class OnlineChatWidget extends CWidget
{
    public function init()
    {
        $id = (int)Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        $pages = array(
            // ***** classic technologies *****
            '953',
            // зерновые селяки
            '955', '956', '958', '964', 
            // посевные комбинации
            '969', '970', '972',
            // плуги
            '975', '976', '978', '980', '1589', '1590', '1659', '1638',
            // бороны дисковые
            '993', '994', '1004', '996', '1000', '1002', 
            // бороны пружинные
            '1007', '1008', 
            // культиваторы предпосевные
            '1011', '1012', '1014', '1016', '1018', '1649',
            // культиваторы стерневые
            '1021', '1022', '1024', 
            // глубокорыхлители и чизели
            '1027', '1028', '1030',
            // мульчиров
            '1035', '1036', '1039', '1040', 
            // почвенные фрезы
            '1622', '1624', '1628',
            
            // ***** shirokozahvatnie technologies *****
            '891', 
            // широкозахватные сеялки
            '1556', '1693', '1694', '894', '896', '898', '900', '904', '910',
            '912', '950',
            // бороны дисковые
            '915', '916', 
            // бороны пружинные
            '919', '920', '1640', '1648',
            // культиваторы
            '925', '926',
            // чизели и груборыхлители
            '935', '936', '938', '1595', '1596',
            // культиваторы стерневые
            '941', '942',
            
            // ***** teleskopicheskie pogruzchiki *****
            '845',
            // телескопические погрузчики dieci
            '847', '848', '850', '852', '854', '856', '858',
            // рабочие органы
            '861', '862',
            
            // ***** tractors *****
            '797',
            // мтз
            '813', '820', '822', '816', '814', '818', '824', '826', '828',
            // сдвоенные колеса
            '831', '836', '834', '842', '840', '838', '832',
            
            // ***** vegetables *****
            '1083',
            // гребнеобразователи
            '1085', '1086', '1700', '1090', '1630', '1650', '1699',
            // овощные сеялки и рассадопосадочные машины
            '1093', '1560', '1096', '1098',
            // картофелесажалки
            '1101', '1586', '1631', '1632', '1633',
            // ботвоудалители
            '1107', '1108', '1110', '1676',
            // картофелекопатели
            '1115', '1118', '1635', '1636', '1637', '1116', '1677', '1703',
            // картофелеуборочные комбайны
            '1121', '1124', '1122', '1678', '1679',
            // свеклоуборочные комбайны
            '1129', '1130',
            // капустоуборочные комбайны
            '1683', '1682',
            // морковоуборочные комбайны
            '1133', '1137',
            // техника для уборки лука
            '1137', '1144', '1701', '1138', '1140', '1142', '1146', '1148', '1702',
            // складская обработка, сортировка, хранение
            '1151', '1154', '1575', '1578', '1580', '1581', '1582', '1584', '1587', '1588',
            '1625', '1641', '1642', '1643', '1644', '1645', '1646', '1647', '1680',
            
            // ***** watering systems *****
            '1345',
            // ирригаторы
            '1347', '1348', 
            // круговые системы полива
            '1696', '1698',
            // насосы и дизельные станции
            '1351', '1352', '1354', '1704',
            // трубы и аксессуары
            '1357', '1358', '1360',
        );
        
        if(in_array($id, $pages)) {
            $this->render('index');
        }
    }
}
