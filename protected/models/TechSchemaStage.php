<?php

/**
 * This is the model class for table "tech_schema_stage".
 *
 * The followings are the available columns in table 'tech_schema_stage':
 * @property integer $id
 * @property integer $schema_id
 * @property integer $stage_id
 * @property integer $level
 *
 * The followings are the available model relations:
 * @property ProductTechSchema[] $productTechSchemas
 * @property TechStage $stage
 * @property TechSchema $schema
 */
class TechSchemaStage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TechSchemaStage the static model class
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
		return 'tech_schema_stage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schema_id, stage_id, level', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, schema_id, stage_id, level', 'safe', 'on'=>'search'),
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
			'productTechSchemas' => array(self::HAS_MANY, 'ProductTechSchema', 'stage_id'),
			'stage' => array(self::BELONGS_TO, 'TechStage', 'stage_id'),
			'schema' => array(self::BELONGS_TO, 'TechSchema', 'schema_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'schema_id' => 'Schema',
			'stage_id' => 'Stage',
			'level' => 'Level',
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
		$criteria->compare('schema_id',$this->schema_id);
		$criteria->compare('stage_id',$this->stage_id);
		$criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}