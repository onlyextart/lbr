<?php
class NewsController extends Controller
{
    public function actionIndex($page = null)
    {
        $paginatorPage = 0;
        if(!empty($page)) $paginatorPage = $page - 1;
        
        $id = Yii::app()->params['currentMenuItem']->menuItemsContents[0]->page_id;
        if(empty($id)) {
            $groupId = Yii::app()->params['currentMenuItem']->group_id; 
            $criteria = new CDbCriteria();
            $criteria->together = true; // relations
            $criteria->with = array('newsRegions');
            $criteria->compare('published', 1);
            $criteria->order = 'date DESC';

            if($groupId == 27) { // News (all and for region)
                $criteria->compare('newsRegions.filial_id', array(Yii::app()->params['defaultRegionId'], Yii::app()->params['regionId']));
            } else if($groupId == 5 && Yii::app()->params['regionId'] > 0) { //News for region only
                $criteria->compare('newsRegions.filial_id', Yii::app()->params['regionId']);
            } else { // for region if it wasn't choose
                $criteria->compare('newsRegions.filial_id', -10000);
            }

            $count = News::model()->count($criteria);

            $dataProvider = new CActiveDataProvider('News',
                array(
                    'criteria' => $criteria,
                    'pagination' => array(
                        'pageSize' => 10,
                        'currentPage'=>$paginatorPage,
                    )
                )
            );

            $this->render('index', array('data' => $dataProvider, 'count' => $count));
        } else {
            $alias = substr($lastPartOfUrl, $pos + 1);
            $data = Yii::app()->db->createCommand()
                ->select('r.content, n.date, n.header')
                ->from('news_region r')
                ->join('news n', 'n.id=r.news_id')
                ->where('r.news_id=:id', array(':id' => $id))
                ->queryRow()
            ;               
            $this->render('view', array('data' => $data));
        }
    }

    public function actionView($id)
    {
        $data = News::model()->findByPk($id, 'published=1');
        $this->render('_view', array('data'=>$data));
    }
}