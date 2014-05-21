<?php

/**
 * This is the model class for table "tech_characteristic".
 *
 * The followings are the available columns in table 'tech_characteristic':
 * @property integer $id
 * @property string $title
 * @property integer $measure_id
 *
 * The followings are the available model relations:
 * @property ProductRangeValue[] $productRangeValues
 * @property Measure $measure
 */
class TechCharacteristic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TechCharacteristic the static model class
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
		return 'tech_characteristic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('measure_id', 'numerical', 'integerOnly'=>true),
			array('title', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, measure_id', 'safe', 'on'=>'search'),
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
			'measure' => array(self::BELONGS_TO, 'Measure', 'measure_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'measure_id' => 'Measure',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('measure_id',$this->measure_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}