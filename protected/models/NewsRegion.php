<?php

/**
 * This is the model class for table "news_region".
 *
 * The followings are the available columns in table 'news_region':
 * @property integer $id
 * @property string $content
 * @property string $description
 * @property integer $filial_id
 * @property string $thumbnail
 * @property integer $news_id
 *
 * The followings are the available model relations:
 * @property News $news
 * @property Contacts $filial
 */
class NewsRegion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NewsRegion the static model class
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
		return 'news_region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filial_id, news_id', 'numerical', 'integerOnly'=>true),
			array('content, description, thumbnail', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, content, description, filial_id, thumbnail, news_id', 'safe', 'on'=>'search'),
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
			'news' => array(self::BELONGS_TO, 'News', 'news_id'),
			'filial' => array(self::BELONGS_TO, 'Contacts', 'filial_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'content' => 'Содержание',
			'description' => 'Описание',
			'filial_id' => 'Филиал',
			'thumbnail' => 'Thumbnail',
			'news_id' => 'News',
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
		$criteria->compare('content',$this->content,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('filial_id',$this->filial_id);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('news_id',$this->news_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}