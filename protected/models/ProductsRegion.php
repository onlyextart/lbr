<?php

/**
 * This is the model class for table "products_region".
 *
 * The followings are the available columns in table 'products_region':
 * @property integer $id
 * @property integer $product_id
 * @property integer $filial_id
 * @property string $additional_review
 *
 * The followings are the available model relations:
 * @property Contacts $filial
 * @property Products $product
 */
class ProductsRegion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductsRegion the static model class
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
		return 'products_region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, filial_id', 'numerical', 'integerOnly'=>true),
			array('additional_review', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, filial_id, additional_review', 'safe', 'on'=>'search'),
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
			'filial_id' => 'Filial',
			'additional_review' => 'Additional Review',
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
		$criteria->compare('filial_id',$this->filial_id);
		$criteria->compare('additional_review',$this->additional_review,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}