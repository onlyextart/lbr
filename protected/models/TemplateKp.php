<?php

/**
 * This is the model class for table "template_kp".
 *
 * The followings are the available columns in table 'template_kp':
 * @property integer $id
 * @property string $title
 * @property string $big_image
 * @property string $description
 * @property string $small_image
 * @property integer $type
 * @property string $description2
 */
class TemplateKp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TemplateKp the static model class
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
		return 'template_kp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type', 'numerical', 'integerOnly'=>true),
			array('title, big_image, description, small_image, description2', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, big_image, description, small_image, type, description2', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Заголовок',
			'big_image' => 'Большое изображение',
			'description' => 'Основное описание',
			'small_image' => 'Маленькие изображения',
			'type' => 'Выбери тип',
			'description2' => 'Описание на всю ширину',
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
		$criteria->compare('big_image',$this->big_image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('small_image',$this->small_image,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('description2',$this->description2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}