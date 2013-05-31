<?php

/**
 * This is the model class for table "banner_images".
 *
 * The followings are the available columns in table 'banner_images':
 * @property integer $id
 * @property string $path
 * @property string $description
 * @property integer $region_id
 * @property string $alt
 * @property string $title
 * @property integer $sorting
 * @property integer $banner_id
 * @property integer $type
 * @property string $top_left
 * @property string $top_right
 * @property string $bottom_left
 * @property string $bottom_right
 *
 * The followings are the available model relations:
 * @property Banners $banner
 * @property Contacts $region
 */
class BannerImages extends CActiveRecord
{
    
        const DEFAULT_IMAGE_TYPE = 0;
        const TIMETOBUY_IMAGE_TYPE = 1;
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BannerImages the static model class
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
		return 'banner_images';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('region_id, sorting, banner_id, type', 'numerical', 'integerOnly'=>true),
			array('path, description, alt, title, top_left, top_right, bottom_left, bottom_right', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, path, description, region_id, alt, title, sorting, banner_id, type, top_left, top_right, bottom_left, bottom_right', 'safe', 'on'=>'search'),
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
			'banner' => array(self::BELONGS_TO, 'Banners', 'banner_id'),
			'region' => array(self::BELONGS_TO, 'Contacts', 'region_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'path' => 'Path',
			'description' => 'Description',
			'region_id' => 'Region',
			'alt' => 'Alt',
			'title' => 'Title',
			'sorting' => 'Sorting',
			'banner_id' => 'Banner',
			'type' => 'Type',
			'top_left' => 'Top Left',
			'top_right' => 'Top Right',
			'bottom_left' => 'Bottom Left',
			'bottom_right' => 'Bottom Right',
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
		$criteria->compare('path',$this->path,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('region_id',$this->region_id);
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('sorting',$this->sorting);
		$criteria->compare('banner_id',$this->banner_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('top_left',$this->top_left,true);
		$criteria->compare('top_right',$this->top_right,true);
		$criteria->compare('bottom_left',$this->bottom_left,true);
		$criteria->compare('bottom_right',$this->bottom_right,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //Метод возвращает все типы изображений в виде массива, где:
        // ключ - id типа, а значение - имя типа
        static function getImageTypes()
        {
            $types = array();
            $types[BannerImages::DEFAULT_IMAGE_TYPE] = 'Обычный';
            $types[BannerImages::TIMETOBUY_IMAGE_TYPE] = 'Время покупать';
            return $types;
        }
}