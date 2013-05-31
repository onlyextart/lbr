<?php

class UsersController extends Controller
{
        //User block
	public function actionIndex()
	{
            
            if(Yii::app()->user->checkAccess('readUser'))
            {
                $criteria = new CDbCriteria();
                $sort = new CSort();
                $sort->sortVar = 'sort';
                // сортировка по умолчанию 
                $sort->defaultOrder = 'id ASC';
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
                $dataProvider = new CActiveDataProvider('Users', 
                        array(
                            'criteria'=>$criteria,
                            'sort'=>$sort,
                            'pagination'=>array(
                                'pageSize'=>'15'
                            )
                        )
                );
                $this->render('user/users', array('data'=>$dataProvider));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                        $this->redirect('/administrator/users/');
                    }
                }
                $this->renderPartial('user/edituser', array('model'=>$model, 'group'=>$group));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }
        public function actionEditUser($id)
        {
            if(Yii::app()->user->checkAccess('editUser'))
            {
                $model = Users::model()->findByPk($id);
                $group = UserGroups::getUserGroupsArray();
                if (isset($_POST['Users'])){
                    $model->attributes = $_POST['Users'];
                    $model->save();
                    $this->redirect('/administrator/users/');
                }
                $this->renderPartial('user/edituser', array('model'=>$model, 'group'=>$group));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }
        public function actionDeleteUser($id)
        {
            if(Yii::app()->user->checkAccess('deleteUser'))
            {
                Users::model()->deleteByPk($id);
                $this->redirect('/administrator/users/');
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                $sort->defaultOrder = 'id ASC';
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
                $this->render('group/groups', array('data'=>$dataProvider));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }
        public function actionCreateGroup()
        {
            if(Yii::app()->user->checkAccess('createUserGroup'))
            {
                $model = new UserGroups();
                $role = AuthItem::model()->findAll('type=2');
                if (isset($_POST['UserGroups'])){
                    $model->attributes = $_POST['UserGroups'];
                    if($model->save()){
                        $this->redirect('/administrator/users/group/');
                    }
                }
                $this->renderPartial('group/editgroup', array('model'=>$model, 'role'=>$role));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }
        public function actionEditGroup($id)
        {
            if(Yii::app()->user->checkAccess('editUserGroup'))
            {
                $model = UserGroups::model()->findByPk($id);
                $role = AuthItem::model()->findAll('type=2');
                $checkbox = AuthAssignment::model()->findAll('userid='.$id);
                if (isset($_POST['UserGroups'])){
                    $model->attributes = $_POST['UserGroups'];
                    $model->save();
                    $this->redirect('/administrator/users/group/');
                }
                $this->renderPartial('group/editgroup', array('model'=>$model, 'role'=>$role,'checkbox'=>$checkbox));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }
        public function actionDeleteGroup($id)
        {
            if(Yii::app()->user->checkAccess('deleteUserGroup'))
            {
                UserGroups::model()->deleteByPk($id);
                $this->redirect('/administrator/users/group/');
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                $this->render('role/roles', array('data'=>$dataProvider));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                        $this->redirect('/administrator/users/role/');
                    }
                }
                $this->renderPartial('role/editrole', array('model'=>$model, 'operation'=>$operation));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                        $this->redirect('/administrator/users/role/');
                    }
                }
                $this->renderPartial('role/editrole', array('model'=>$model, 'operation'=>$operation));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }
        public function actionDeleteRole($name)
        {
            if(Yii::app()->user->checkAccess('deleteRole'))
            {
                Yii::app()->authManager->removeAuthItem($name);
                $this->redirect('/administrator/users/role/');
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                                'pageSize'=>'15'
                            )
                        )
                );
                $this->render('operation/operations', array('data'=>$dataProvider));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                        $this->redirect('/administrator/users/operation/');
                    }
                }
                $this->renderPartial('operation/editoperation', array('model'=>$model));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
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
                        $this->redirect('/administrator/users/operation/');
                    }
                }
                $this->renderPartial('operation/editoperation', array('model'=>$model));
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }
        public function actionDeleteOperation($name)
        {
            if(Yii::app()->user->checkAccess('deleteOperation'))
            {
                Yii::app()->authManager->removeAuthItem($name);
                $this->redirect('/administrator/users/operation/');
            }else{
                Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                $this->redirect('/users/login/');
            }
        }       
}