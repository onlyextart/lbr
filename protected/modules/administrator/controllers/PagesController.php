<?php
/**
 * Description of PagesController extends Controller
 *
 * @author cheshenkov
 * 
 */
class PagesController extends Controller {
    
    public function actionIndex()
    {
        if(Yii::app()->user->checkAccess('readPage'))
        {
            $criteria = new CDbCriteria();
            $sort = new CSort();
            $sort->sortVar = 'sort';
            $sort->defaultOrder = 'name ASC';
            $sort->attributes = array(
                            'id'=>array(
                                'id'=>'ID',
                                'asc'=>'id ASC',
                                'desc'=>'id DESC',
                                'default'=>'desc',
                            ),
                            'name'=>array(
                                'name'=>'Заголовок',
                                'asc'=>'name ASC',
                                'desc'=>'name DESC',
                                'default'=>'desc',
                            ),
                            'data'=>array(
                                'data'=>'Дата',
                                'asc'=>'data ASC',
                                'desc'=>'data DESC',
                                'default'=>'desc',
                            ),
                        );
            $dataProvider = new CActiveDataProvider('Pages', 
                    array(
                        'criteria'=>$criteria,
                        'sort'=>$sort,
                        'pagination'=>array(
                            'pageSize'=>'13'
                        )
                    )
            );
            if ($id_item = Yii::app()->user->getFlash('saved_id')){
                $model = Pages::model()->findByPk($id_item);
                $view = $this->renderPartial('editpage', array('model'=>$model), true, false);
            }
            $this->render('default', array('data'=>$dataProvider, 'view'=>$view));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
        
    }
    
    public function actionCreatePage(){
        if(Yii::app()->user->checkAccess('createPage'))
        {
            $model = new Pages();
            if (isset($_POST['Pages'])){
                $model->attributes = $_POST['Pages'];
                if($model->save()){
                    if( isset( $_POST['MenuItemConteintigThisPage'] ) ){
                        foreach( $_POST['MenuItemConteintigThisPage'] as $menuItemId=>$value ){
                            if($value!='0'){
                                $menuItemContentModel = new MenuItemsContent();
                                $menuItemContentModel->item_id = $menuItemId;
                                $menuItemContentModel->page_id = $model->id;
                                $menuItemContentModel->save();
                            }
                        }
                    }
                    Yii::app()->user->setFlash('saved_id', $model->id);
                    Yii::app()->user->setFlash('message', 'Страница "'.$model->name.'" созданa успешно.');
                    $this->redirect('/administrator/pages/');
                }
            }
            $this->renderPartial('editpage', array('model'=>$model), false, true);
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionEditPage($id){
        if(Yii::app()->user->checkAccess('editPage'))
        {
            $model = Pages::model()->findByPk($id);
            
            if( isset( $_POST['MenuItemConteintigThisPage'] ) ){
                $menuItmemsContentModels = MenuItemsContent::model()->with('item')->findAll(
                    'page_id='.$model->id.
                    ' AND item.type='.MenuItems::STATIC_MENU_ITEM_TYPE
                );
                $menuItmemsContentModelsForDeleting = $menuItmemsContentModels;
                $menuItmemsContentNum = 0;
                foreach( $_POST['MenuItemConteintigThisPage'] as $menuItemId=>$value ){
                    if($value!='0'){
                        if(!isset($menuItmemsContentModels[$menuItmemsContentNum]))
                            $menuItmemsContentModels[$menuItmemsContentNum] = new MenuItemsContent();
                        $menuItmemsContentModels[$menuItmemsContentNum]->item_id = $menuItemId;
                        $menuItmemsContentModels[$menuItmemsContentNum]->page_id = $model->id;
                        $menuItmemsContentModels[$menuItmemsContentNum]->save();
                        unset( $menuItmemsContentModelsForDeleting[$menuItmemsContentNum] );
                        $menuItmemsContentNum++;
                    }
                }
                foreach( $menuItmemsContentModelsForDeleting as $deleteMenuItmemsContent ){
                    $deleteMenuItmemsContent->delete();
                }
            }
            
            if (isset($_POST['Pages'])){
                $model->attributes = $_POST['Pages'];
                if($model->save()){
                    Yii::app()->user->setFlash('saved_id', $model->id);
                    Yii::app()->user->setFlash('message', 'Страница "'.$model->name.'" сохранена успешно.');
                    $this->redirect('/administrator/pages/');
                }
            
            }
            $this->renderPartial('editpage', array('model'=>$model), false, true);
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionDeletePage($id){
        if(Yii::app()->user->checkAccess('deletePage'))
        {
            if(Pages::model()->deleteByPk($id)){
                Yii::app()->user->setFlash('message', 'Страница удалена успешно.');
                $this->redirect('/administrator/pages/');
            }
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }

}

?>
