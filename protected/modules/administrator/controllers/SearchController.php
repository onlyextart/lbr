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
    
    public function actionIndexing() {
        if(Yii::app()->user->checkAccess('search'))
        {
            $criteria = new CDbCriteria();
            $sort = new CSort();
            $sort->sortVar = 'sort';
            // сортировка по умолчанию 
            $sort->defaultOrder = 'header ASC';
            $sort->attributes = array(
                            'header'=>array(
                                'header'=>'Заголовок',
                                'asc'=>'header ASC',
                                'desc'=>'header DESC',
                                'default'=>'desc',
                            ),
                            'type'=>array(
                                'type'=>'Тип страницы',
                                'asc'=>'type ASC',
                                'desc'=>'type DESC',
                                'default'=>'desc'
                            ),
                            'status'=>array(
                                'status'=>'Статус',
                                'asc'=>'status ASC',
                                'desc'=>'status DESC',
                                'default'=>'desc',
                            ),
                            'date'=>array(
                                'date'=>'Дата',
                                'asc'=>'date ASC',
                                'desc'=>'date DESC',
                                'default'=>'desc',
                            )
                        );
            $dataProvider = new CActiveDataProvider('SearchIndex', 
                    array(
                        'criteria'=>$criteria,
                        'sort'=>$sort,
                        'pagination'=>array(
                            'pageSize'=>'13'
                        )
                    )
            );
            $status['count_no_index'] = SearchIndex::model()->count('status=0');
            $status['count_in_search'] = SearchIndex::model()->count('status=1');
            $status['count_no_search'] = SearchIndex::model()->count('status=2');
            
            $this->render('index/default', array('data'=>$dataProvider, 'status'=>$status));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    public function actionReindex() {
        if(Yii::app()->user->checkAccess('search'))
        {
            $reindex = $_POST['reindex'];
            if(count($reindex['tables'])==5){
                $result = SearchIndex::reindexAll();
            }elseif(count($reindex['tables'])>0){
                $result = array();
                foreach ($reindex['tables'] as $tabl=>$i){
                   $r = SearchIndex::reindexOneTable($tabl);
                   array_push($result, $r);
                }
            }
            $this->render('index/reindex', array('data'=>$result));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionTop(){
        if(Yii::app()->user->checkAccess('search'))
        {
//            $sort = new CSort();
//            $sort->sortVar = 'sort';
//            // сортировка по умолчанию 
//            $sort->defaultOrder = 'sorted ASC';
            $dataProvider = new CActiveDataProvider('SearchRecommended');
            $this->render('recommended/default', array('data'=>$dataProvider));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionCreateTop(){
        if(Yii::app()->user->checkAccess('search'))
        {
            $model = new SearchRecommended();
            if (isset($_POST['SearchRecommended'])){
                $model->attributes = $_POST['SearchRecommended'];
                if($model->save()){
                    Yii::app()->user->setFlash('saved_id', $model->id);
                    Yii::app()->user->setFlash('message', 'Запись "'.$model->sorted.'" созданa успешно.');
                    $this->redirect('/administrator/search/top/');
                }
            }
            $this->renderPartial('recommended/editpage', array('model'=>$model), false, true);
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionEditTop($id){
        if(Yii::app()->user->checkAccess('search'))
        {
            if(!$id)
            {
                return false;
            }
            $model = SearchRecommended::model()->findByPk($id);
            if (isset($_POST['SearchRecommended'])){
                $model->attributes = $_POST['SearchRecommended'];
                if($model->save()){
                    Yii::app()->user->setFlash('saved_id', $model->id);
                    Yii::app()->user->setFlash('message', 'Запись "'.$model->sorted.'" успешно отредактированна.');
                    $this->redirect('/administrator/search/top/');
                }
            }
            $this->renderPartial('recommended/editpage', array('model'=>$model), false, true);
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionDeleteTop($id){
        if(Yii::app()->user->checkAccess('search'))
        {
            if(!$id)
            {
                return false;
            }
            if(SearchRecommended::model()->deleteByPk($id)){
                Yii::app()->user->setFlash('message', 'Запись удалена успешно.');
                $this->redirect('/administrator/search/top/');
            }
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
}
