<?php

/**
 * This is the model class for table "banner_region".
 *
 * The followings are the available columns in table 'banner_region':
 * @property integer $id
 * @property integer $banner_id
 * @property string $description
 * @property string $name
 * @property integer $filial_id
 *
 * The followings are the available model relations:
 * @property Contacts $filial
 * @property Banners $banner
 */
class BannerRegion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BannerRegion the static model class
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
		return 'banner_region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('banner_id, filial_id', 'numerical', 'integerOnly'=>true),
			array('name', 'required'),
			array('description, name', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, banner_id, description, name, filial_id', 'safe', 'on'=>'search'),
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
			'filial' => array(self::BELONGS_TO, 'Contacts', 'filial_id'),
			'banner' => array(self::BELONGS_TO, 'Banners', 'banner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'banner_id' => 'Banner',
			'description' => 'Description',
			'name' => 'Name',
			'filial_id' => 'Filial',
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
		$criteria->compare('banner_id',$this->banner_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('filial_id',$this->filial_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}