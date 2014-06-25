<?php

/**
 * This is the model class for table "product_tech_characteristic".
 *
 * The followings are the available columns in table 'product_tech_characteristic':
 * @property integer $id
 * @property integer $product_id
 * @property integer $measure_id
 * @property integer $tech_id
 *
 * The followings are the available model relations:
 * @property ProductRangeValue[] $productRangeValues
 * @property TechCharacteristic $tech
 * @property Measure $measure
 * @property Products $product
 */
class ProductTechCharacteristic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductTechCharacteristic the static model class
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
		return 'product_tech_characteristic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, measure_id, tech_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, measure_id, tech_id', 'safe', 'on'=>'search'),
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
			'productRangeValues' => array(self::HAS_MANY, 'ProductRangeValue', 'tech_id'),
			'tech' => array(self::BELONGS_TO, 'TechCharacteristic', 'tech_id'),
			'measure' => array(self::BELONGS_TO, 'Measure', 'measure_id'),
			'product' => array(self::BELONGS_TO, 'Products', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'measure_id' => 'Measure',
			'tech_id' => 'Tech',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('measure_id',$this->measure_id);
		$criteria->compare('tech_id',$this->tech_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}