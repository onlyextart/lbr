<?php

/**
 * This is the model class for table "product_range_value".
 *
 * The followings are the available columns in table 'product_range_value':
 * @property integer $id
 * @property integer $range_id
 * @property integer $tech_id
 * @property string $val_text
 * @property double $val_int
 *
 * The followings are the available model relations:
 * @property ProductTechCharacteristic $tech
 * @property ProductRange $range
 */
class ProductRangeValue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductRangeValue the static model class
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
		return 'product_range_value';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('range_id, tech_id', 'numerical', 'integerOnly'=>true),
			array('val_int', 'numerical'),
			array('val_text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, range_id, tech_id, val_text, val_int', 'safe', 'on'=>'search'),
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
			'tech' => array(self::BELONGS_TO, 'ProductTechCharacteristic', 'tech_id'),
			'range' => array(self::BELONGS_TO, 'ProductRange', 'range_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'range_id' => 'Range',
			'tech_id' => 'Tech',
			'val_text' => 'Val Text',
			'val_int' => 'Val Int',
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
		$criteria->compare('range_id',$this->range_id);
		$criteria->compare('tech_id',$this->tech_id);
		$criteria->compare('val_text',$this->val_text,true);
		$criteria->compare('val_int',$this->val_int);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}