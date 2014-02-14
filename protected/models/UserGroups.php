<?php

/**
 * This is the model class for table "user_groups".
 *
 * The followings are the available columns in table 'user_groups':
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Users[] $users
 */
class UserGroups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserGroups the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, level', 'safe'),
                        array('name', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, level', 'safe', 'on'=>'search'),
                        array('level', 'compare', 'compareValue'=>Yii::app()->user->getState('level'), 'operator'=>'>'),
                        
		);
	}

        /**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'users' => array(self::HAS_MANY, 'Users', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Название',
			'description' => 'Описание',
                        'level' => 'Уровень доступа',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
                $criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //  Метод возвращает массив всех доступных групп пользователей для данного пользователя
        //  $only_id - если false, вернет массив вида ID=>имя, если true - вернет массив только из ID
        static function getUserGroupsArray($only_id = false){
                $groups = UserGroups::model()->findAll('level>='.Yii::app()->user->getState('level'));
                $groupsArray = array();
                $groups_id = array();
                foreach( $groups as $group ){
                    $groupsArray[$group->id] = $group->name;
                    array_push($groups_id, $group->id);
                }
                if ($only_id){
                    return $groups_id;
                }else{
                    return $groupsArray;
                }
        }
        
        //  Метод сохраняет связи Группа-Роль в таблицу соответствий
        //  $_POST['Roles'] - массив с наименованиями ролей
        protected function afterSave() {
            parent::afterSave();
                $auth=Yii::app()->authManager;
                $children = $auth->getAuthAssignments($this->id);
                foreach ($children as $name=>$child){
                    $auth->revoke($name, $this->id);
                }
                if (isset($_POST['Roles'])){
                    foreach ($_POST['Roles']['name'] as $item){
                        $auth->assign($item, $this->id);
                    }
                }
            return true;
        }
        
        //  Статический метод, проверяющий доступ к группе
        //  $params - массив параметров, где:
        //  $params['level'] - уровень изменяемой группы
        static function userGroupsAccess($params){
            if ($params){
                if ($params['level']>Yii::app()->user->getState('level'))
                    return true;
            }
            return false;
        }

        //  Метод устанавливает сортировку по-умолчанию
        public function defaultScope()
        {
                return array(
                    'order'=>$this->getTableAlias(false, false).'.level ASC'
                );
        }
}