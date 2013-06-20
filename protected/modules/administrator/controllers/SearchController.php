<?php

class SearchController extends Controller
{
    protected function beforeAction($action)
    {
        if(parent::beforeAction($action))
        {
            //  Добавление CSS файла для пользователей.
            Yii::app()->clientScript->registerCssFile('/css/admin/users/search.css');
        }
        return true;
    }

    public function actionIndex()
    {
        if(Yii::app()->user->checkAccess('search'))
        {
            $criteria = new CDbCriteria();
            $sort = new CSort();
            $sort->sortVar = 'sort';
            // сортировка по умолчанию 
            $sort->defaultOrder = 'data ASC';
            $sort->attributes = array(
                            'query'=>array(
                                'query'=>'Запрос',
                                'asc'=>'query ASC',
                                'desc'=>'query DESC',
                                'default'=>'desc',
                            ),
                            'transition'=>array(
                                'transition'=>'Переход',
                                'asc'=>'transition ASC',
                                'desc'=>'transition DESC',
                                'default'=>'desc'
                            ),
                            'domain'=>array(
                                'domain'=>'Домен',
                                'asc'=>'domain ASC',
                                'desc'=>'domain DESC',
                                'default'=>'desc',
                            ),
                            'data'=>array(
                                'data'=>'Дата',
                                'asc'=>'data ASC',
                                'desc'=>'data DESC',
                                'default'=>'desc',
                            ),

                        );
            $dataProvider = new CActiveDataProvider('SearchLog', 
                    array(
                        'criteria'=>$criteria,
                        'sort'=>$sort,
                        'pagination'=>array(
                            'pageSize'=>'13'
                        )
                    )
            );
            $this->render('default', array('data'=>$dataProvider, 'view'=>$view));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
}
?>
