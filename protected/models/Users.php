<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property integer $group_id
 *
 * The followings are the available model relations:
 * @property UserGroups $group
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id', 'numerical', 'integerOnly'=>true),
			array('login, password, name, surname, email', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, login, password, name, surname, email, group_id', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'UserGroups', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'login' => 'Login',
			'password' => 'Password',
			'name' => 'Name',
			'surname' => 'Surname',
			'email' => 'Email',
			'group_id' => 'Group',
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
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('group_id',$this->group_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        protected function beforeSave() {
            parent::beforeSave();
            if (isset($_POST['User_password']) && $_POST['User_password']!=''){
                $this->password = crypt($_POST['User_password'], Users::model()->blowfishSalt());
            }
            return true;
        }

        protected function blowfishSalt($cost = 13)
        {
            if (!is_numeric($cost) || $cost < 4 || $cost > 31) {
                throw new Exception("cost parameter must be between 4 and 31");
            }
            $rand = array();
            for ($i = 0; $i < 8; $i += 1) {
                $rand[] = pack('S', mt_rand(0, 0xffff));
            }
            $rand[] = substr(microtime(), 2, 6);
            $rand = sha1(implode('', $rand), true);
            $salt = '$2a$' . sprintf('%02d', $cost) . '$';
            $salt .= strtr(substr(base64_encode($rand), 0, 22), array('+' => '.'));
            return $salt;
        }
}