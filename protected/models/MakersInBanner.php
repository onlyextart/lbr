<?php

/**
 * This is the model class for table "makers_in_banner".
 *
 * The followings are the available columns in table 'makers_in_banner':
 * @property integer $id
 * @property integer $bannner_id
 * @property integer $maker_id
 *
 * The followings are the available model relations:
 * @property Makers $maker
 * @property Banners $bannner
 */
class MakersInBanner extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MakersInBanner the static model class
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
		return 'makers_in_banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, bannner_id, maker_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, bannner_id, maker_id', 'safe', 'on'=>'search'),
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
			'maker' => array(self::BELONGS_TO, 'Makers', 'maker_id'),
			'bannner' => array(self::BELONGS_TO, 'Banners', 'bannner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'bannner_id' => 'Bannner',
			'maker_id' => 'Maker',
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
		$criteria->compare('bannner_id',$this->bannner_id);
		$criteria->compare('maker_id',$this->maker_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}