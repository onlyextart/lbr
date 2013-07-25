<?php
	Yii::import('zii.widgets.CPortlet');
 
class RecentNews extends CPortlet
{
    public $header='Recent News';
    public $maxNews=4;
 
    public function getRecentNews()
    {
        return News::model()->findRecentNews($this->maxNews);
    }
 
    protected function renderContent()
    {
        $this->render('recentNews');
    }
}
?>