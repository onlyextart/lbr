<?php

/**
 * This is the model class for table "regions".
 *
 * The followings are the available columns in table 'regions':
 * @property integer $id
 * @property string $name
 * @property integer $district_id
 * @property integer $sorting
 * @property boolean $published
 * @property integer $contact_id
 *
 * The followings are the available model relations:
 * @property BannerImages[] $bannerImages
 * @property Contacts $contact
 */
class Regions extends CActiveRecord
{
	
//        public static $districts = array(
//            '0'=>'Центральный федеральный округ',            
//            '1'=>'Приволжский федеральный округ',
//            '2'=>'Южный федеральный округ',      
//            '3'=>'Северо-Кавказский федеральный округ',
//            '4'=>'Дальневосточный федеральный округ',
//            '5'=>'Уральский федеральный округ',
//            '6'=>'Сибирский федеральный округ',
//            '7'=>'Северо-Западный федеральный округ',
//        );
        public static $districts = array(
            '6'=>'Центральный федеральный округ',                           
            '1'=>'Приволжский федеральный округ',
            '7'=>'Южный федеральный округ',
            '0'=>'Дальневосточный федеральный округ',
            '3'=>'Северо-Кавказский федеральный округ',
            '5'=>'Уральский федеральный округ',
            '2'=>'Северо-Западный федеральный округ',
            '4'=>'Сибирский федеральный округ',
        );
        /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Regions the static model class
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
		return 'regions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('district_id, sorting, contact_id', 'numerical', 'integerOnly'=>true),
			array('name, published', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, district_id, sorting, published, contact_id', 'safe', 'on'=>'search'),
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
			'bannerImages' => array(self::HAS_MANY, 'BannerImages', 'region_id'),
			'contact' => array(self::BELONGS_TO, 'Contacts', 'contact_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Область',
			'district_id' => 'Округ',
			'sorting' => 'Сортировка',
			'published' => 'Статус',
			'contact_id' => 'Контакт',
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
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('sorting',$this->sorting);
		$criteria->compare('published',$this->published);
		$criteria->compare('contact_id',$this->contact_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    protected function afterSave(){
            parent::afterSave();
            if($this->sorting===null){
                $newPage = Regions::model()->findByPk($this->id);
                $newPage->sorting=$this->id;
                $newPage->save(false);
            }
            return true;
        }
        
        public function defaultScope()
        {
                return array(
                    'order'=>$this->getTableAlias(false, false).'.sorting ASC'
                );
        }
        
        static function getDistricts(){
                return self::$districts;
        }
}