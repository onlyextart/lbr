<?php

/**
 * This is the model class for table "contacts".
 *
 * The followings are the available columns in table 'contacts':
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property integer $published
 * @property string $domain
 * @property string $address
 * @property string $telephone
 * @property string $work_time
 * @property string $email
 * @property string $map_code
 * @property string $message_email
 * @property string $info
 * @property string $images
 *
 * The followings are the available model relations:
 * @property BannerRegion[] $bannerRegions
 * @property NewsRegion[] $newsRegions
 * @property PagesRegion[] $pagesRegions
 * @property ProductsRegion[] $productsRegions
 * @property Regions[] $regions
 */
class Contacts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contacts the static model class
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
		return 'contacts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('published', 'numerical', 'integerOnly'=>true),
			array('email, message_email', 'email'),
			array('name, alias, domain, address, telephone, work_time, email, map_code, message_email, info, images', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, alias, published, domain, address, telephone, work_time, email, map_code, message_email, info, images', 'safe', 'on'=>'search'),
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
			'bannerRegions' => array(self::HAS_MANY, 'BannerRegion', 'filial_id'),
			'newsRegions' => array(self::HAS_MANY, 'NewsRegion', 'filial_id'),
			'pagesRegions' => array(self::HAS_MANY, 'PagesRegion', 'filial_id'),
			'productsRegions' => array(self::HAS_MANY, 'ProductsRegion', 'filial_id'),
			'regions' => array(self::HAS_MANY, 'Regions', 'contact_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'alias' => 'Alias',
			'published' => 'Published',
			'domain' => 'Domain',
			'address' => 'Address',
			'telephone' => 'Telephone',
			'work_time' => 'Work Time',
			'email' => 'Email',
			'map_code' => 'Map Code',
			'message_email' => 'Message Email',
			'info' => 'Info',
			'images' => 'Images',
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
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('work_time',$this->work_time,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('map_code',$this->map_code,true);
		$criteria->compare('message_email',$this->message_email,true);
		$criteria->compare('info',$this->info,true);
		$criteria->compare('images',$this->images,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //Метод возвращает все филиалы в виде массива, где:
        //ключ - id контакта, а значение - имя контакта
        static function getFilialsArray(){
            $filialsArray = array();
            $filialsModel = Contacts::model()->findAll();
            foreach( $filialsModel as $filial ){
                $filialsArray[$filial->id] = $filial->name;
            }
            return $filialsArray;
        }
}