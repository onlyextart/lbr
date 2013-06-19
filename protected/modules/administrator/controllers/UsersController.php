<?php

class UsersController extends Controller
{
    
        protected function beforeAction($action)
	{
            if(parent::beforeAction($action))
            {
                //  Добавление CSS файла для пользователей.
                Yii::app()->clientScript->registerCssFile('/css/admin/users/users.css');
                Yii::app()->clientScript->registerScriptFile('/js/admin/AjaxContentLoader.js');
                Yii::app()->clientScript->registerScriptFile('/js/admin/users.js');
            }
            return true;
	}
        //User block
	public function actionIndex()
	{
            if(Yii::app()->user->checkAccess('readUser'))
            {
                $criteria = new CDbCriteria();
                $sort = new CSort();
                $sort->sortVar = 'sort';
                // сортировка по умолчанию 
                $sort->defaultOrder = 'surname ASC';
                $sort->attributes = array(
                                'group_id'=>array(
                                    'group_id'=>'Группа',
                                    'asc'=>'group_id ASC',
                                    'desc'=>'group_id DESC',
                                    'default'=>'desc',
                                ),
                                'surname'=>array(
                                    'surname'=>'Фамилии',
                                    'asc'=>'surname ASC',
                                    'desc'=>'surname DESC',
                                    'default'=>'desc',
                                ),
                                
                            );
                $dataProvider = new CActiveDataProvider('Users', 
                        array(
                            'criteria'=>$criteria,
                            'sort'=>$sort,
                            'pagination'=>array(
                                'pageSize'=>'13'
                            )
                        )
                );
                if ($id_item = Yii::app()->user->getFlash('saved_id')){
                    $model = Users::model()->findByPk($id_item);
                    $group = UserGroups::getUserGroupsArray();
                    $view = $this->renderPartial('user/edituser', array('model'=>$model, 'group'=>$group), true, true);
                }
                $this->render('user/users', array('data'=>$dataProvider, 'view'=>$view));
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
	}
        public function actionCreateUser()
        {
            if(Yii::app()->user->checkAccess('createUser'))
            {
                $model = new Users();
                $group = UserGroups::getUserGroupsArray();
                if (isset($_POST['Users'])){
                    $model->attributes = $_POST['Users'];
                    if($model->save()){
                        Yii::app()->user->setFlash('saved_id', $model->id);
                        Yii::app()->user->setFlash('message', 'Пользователь '.$model->login.' создан успешно.');
                        $this->redirect('/administrator/users/');
                    }
                }
                $this->renderPartial('user/edituser', array('model'=>$model, 'group'=>$group), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionEditUser($id)
        {
            
            $model = Users::model()->findByPk($id);
            $params = array('group'=>$model->group_id, 'userid'=>$id);
            if(Yii::app()->user->checkAccess('editUser', $params))
            {
                $group = UserGroups::getUserGroupsArray();
                if (isset($_POST['Users'])){
                    $model->attributes = $_POST['Users'];
                    if($model->save()){
                        Yii::app()->user->setFlash('saved_id', $model->id);
                        Yii::app()->user->setFlash('message', 'Пользователь '.$model->login.' сохранен успешно.');
                        $this->redirect('/administrator/users/');
                    }
                }
                $this->renderPartial('user/edituser', array('model'=>$model, 'group'=>$group), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionDeleteUser($id)
        {
            $model = Users::model()->findByPk($id);
            $params = array('group'=>$model->group_id, 'userid'=>$id);
            if(Yii::app()->user->checkAccess('deleteUser', $params) && $id != Yii::app()->user->getState('_id'))
            {
                if(Users::model()->deleteByPk($id)){
                    Yii::app()->user->setFlash('message', 'Пользователь удален успешно.');
                    $this->redirect('/administrator/users/');
                }
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        
        //Group block
        public function actionGroup()
        {
            if(Yii::app()->user->checkAccess('readUserGroup'))
            {
                $criteria = new CDbCriteria();
                $sort = new CSort();
                $sort->sortVar = 'sort';
                // сортировка по умолчанию 
                $sort->defaultOrder = 'level ASC';
                $sort->attributes = array(
                                'id'=>array(
                                    'id'=>'ID',
                                    'asc'=>'id ASC',
                                    'desc'=>'id DESC',
                                    'default'=>'desc',
                                ),
                                'name'=>array(
                                    'name'=>'Названию',
                                    'asc'=>'name ASC',
                                    'desc'=>'name DESC',
                                    'default'=>'desc',
                                ),
                            );
                $dataProvider = new CActiveDataProvider('UserGroups', 
                        array(
                            'criteria'=>$criteria,
                            'sort'=>$sort,
                            'pagination'=>false
                        )
                );
                $this->render('group/groups', array('data'=>$dataProvider, 'view'=>$view));
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionCreateGroup()
        {
            if(Yii::app()->user->checkAccess('createUserGroup'))
            {
                $model = new UserGroups();
                $role = AuthItem::model()->with(array(
                    'authAssignments'=>array(
                     'select'=>false,
                     'joinType'=>'INNER JOIN',
                     'condition'=>'authAssignments.itemname=t.name AND authAssignments.userid='.Yii::app()->user->getId()
                    ))
                   )->findAll('type=2');
                if (isset($_POST['UserGroups'])){
                    $model->attributes = $_POST['UserGroups'];
                    if($model->save()){
                        Yii::app()->user->setFlash('message', 'Группа '.$model->name.' создана успешно.');
                        $this->redirect('/administrator/users/group/');
                    }
                }
                $this->renderPartial('group/editgroup', array('model'=>$model, 'role'=>$role), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionEditGroup($id)
        {
            $model = UserGroups::model()->findByPk($id);
            if(Yii::app()->user->checkAccess('editUserGroup', array('level'=>$model->level)))
            {
                $role = AuthItem::model()->with(array(
                    'authAssignments'=>array(
                     'select'=>false,
                     'joinType'=>'INNER JOIN',
                     'condition'=>'authAssignments.itemname=t.name AND authAssignments.userid='.Yii::app()->user->getId()
                    ))
                   )->findAll('type=2');
                $checkbox = AuthAssignment::model()->findAll('userid='.$id);
                if (isset($_POST['UserGroups'])){
                    $_POST['UserGroups']['bizrule'] = 'return Yii::app()->user->getState("level")<$params["level"];';
                    $model->attributes = $_POST['UserGroups'];
                    if($model->save()){
                        Yii::app()->user->setFlash('message', 'Группа '.$model->name.' сохранена успешно.');
                        $this->redirect('/administrator/users/group/');
                    }
                }
                $this->renderPartial('group/editgroup', array('model'=>$model, 'role'=>$role,'checkbox'=>$checkbox), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionDeleteGroup($id)
        {
            $model = UserGroups::model()->findByPk($id);
            if(Yii::app()->user->checkAccess('deleteUserGroup', array('level'=>$model->level)))
            {
                Yii::app()->user->setFlash('message', 'Группа удалена успешно.');
                UserGroups::model()->deleteByPk($id);
                $this->redirect('/administrator/users/group/');
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        
        // Roles block
        public function actionRole()
        {
            if(Yii::app()->user->checkAccess('readRole'))
            {
                $criteria = new CDbCriteria();
                $criteria->addCondition('type=2');
                $sort = new CSort();
                $sort->sortVar = 'sort';
                // сортировка по умолчанию 
                $sort->defaultOrder = 'name ASC';
                $sort->attributes = array(
                                'name'=>array(
                                    'name'=>'Названию',
                                    'asc'=>'name ASC',
                                    'desc'=>'name DESC',
                                    'default'=>'desc',
                                ),
                            );
                $dataProvider = new CActiveDataProvider('AuthItem', 
                        array(
                            'criteria'=>$criteria,
                            'sort'=>$sort,
                            'pagination'=>false
                        )
                );
                if ($id_item = Yii::app()->user->getFlash('saved_id')){
                    $model = AuthItem::model()->findByPk($id_item);
                    $operation = AuthItem::model()->findAll('type=0');
                    $view = $this->renderPartial('role/editrole', array('model'=>$model, 'operation'=>$operation), true, true);
                }
                $this->render('role/roles', array('data'=>$dataProvider, 'view'=>$view));
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionCreateRole()
        {
            if(Yii::app()->user->checkAccess('createRole'))
            {
                $model = new AuthItem();
                $operation = AuthItem::model()->findAll('type=0');
                if (isset($_POST['AuthItem'])){
                    $_POST['AuthItem']['type'] = 2;
                    $model->attributes = $_POST['AuthItem'];
                    if($model->save()){
                        Yii::app()->user->setFlash('saved_id', $model->name);
                        Yii::app()->user->setFlash('message', 'Роль '.$model->name.' создана успешно.');
                        $this->redirect('/administrator/users/role/');
                    }
                }
                $this->renderPartial('role/editrole', array('model'=>$model, 'operation'=>$operation), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionEditRole($name)
        {
            if(Yii::app()->user->checkAccess('editRole'))
            {
                $model = AuthItem::model()->findByPk($name);
                $operation = AuthItem::model()->findAll('type=0');
                if (isset($_POST['AuthItem'])){
                    $model->attributes = $_POST['AuthItem'];
                    if($model->save()){
                        Yii::app()->user->setFlash('saved_id', $model->name);
                        Yii::app()->user->setFlash('message', 'Роль '.$model->name.' сохранена успешно.');
                        $this->redirect('/administrator/users/role/');
                    }
                }
                $this->renderPartial('role/editrole', array('model'=>$model, 'operation'=>$operation), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionDeleteRole($name)
        {
            if(Yii::app()->user->checkAccess('deleteRole'))
            {
                Yii::app()->authManager->removeAuthItem($name);
                Yii::app()->user->setFlash('message', 'Роль удалена успешно.');
                $this->redirect('/administrator/users/role/');
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        
        // Operation block
        public function actionOperation()
        {
            if(Yii::app()->user->checkAccess('readOperation'))
            {
                $criteria = new CDbCriteria();
                $criteria->addCondition('type=0');
                $sort = new CSort();
                $sort->sortVar = 'sort';
                // сортировка по умолчанию 
                $sort->defaultOrder = 'name ASC';
                $sort->attributes = array(
                                'name'=>array(
                                    'name'=>'Названию',
                                    'asc'=>'name ASC',
                                    'desc'=>'name DESC',
                                    'default'=>'desc',
                                ),
                            );
                $dataProvider = new CActiveDataProvider('AuthItem', 
                        array(
                            'criteria'=>$criteria,
                            'sort'=>$sort,
                            'pagination'=>array(
                                'pageSize'=>'13'
                            )
                        )
                );
                if ($id_item = Yii::app()->user->getFlash('saved_id')){
                    $model = AuthItem::model()->findByPk($id_item);
                    $view = $this->renderPartial('operation/editoperation', array('model'=>$model), true, true);
                }
                $this->render('operation/operations', array('data'=>$dataProvider, 'view'=>$view));
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionCreateOperation()
        {
            if(Yii::app()->user->checkAccess('createOperation'))
            {
                $model = new AuthItem();
                if (isset($_POST['AuthItem'])){
                    $_POST['AuthItem']['type'] = 0;
                    $model->attributes = $_POST['AuthItem'];
                    if($model->save()){
                        Yii::app()->user->setFlash('saved_id', $model->name);
                        Yii::app()->user->setFlash('message', 'Операция '.$model->name.' создана успешно.');
                        $this->redirect('/administrator/users/operation/');
                    }
                }
                $this->renderPartial('operation/editoperation', array('model'=>$model), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionEditOperation($name)
        {
            if(Yii::app()->user->checkAccess('editOperation'))
            {
                $model = AuthItem::model()->findByPk($name);
                if (isset($_POST['AuthItem'])){
                    $model->attributes = $_POST['AuthItem'];
                    if($model->save()){
                        Yii::app()->user->setFlash('saved_id', $model->name);
                        Yii::app()->user->setFlash('message', 'Операция '.$model->name.' сохранена успешно.');
                        $this->redirect('/administrator/users/operation/');
                    }
                }
                $this->renderPartial('operation/editoperation', array('model'=>$model), false, true);
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }
        public function actionDeleteOperation($name)
        {
            if(Yii::app()->user->checkAccess('deleteOperation'))
            {
                Yii::app()->authManager->removeAuthItem($name);
                Yii::app()->user->setFlash('message', 'Операция удалена успешно.');
                $this->redirect('/administrator/users/operation/');
            }else{
                throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
            }
        }   
}