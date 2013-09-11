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
 */
class TemplateKp extends CActiveRecord
{
    
    public $image;

  
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
			array('title, big_image, description, small_image', 'safe'),
            // The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, big_image, description, small_image, type', 'safe', 'on'=>'search'),
            array('image', 'file', 'types'=>'jpg, gif, png',
                'maxSize'=>1024 * 1024 * 5, // 5MB
                'allowEmpty'=>'true',
                'tooLarge'=>'Файл превышает размер 5MB. Пожалуйста загрузите файл меньшим размером.'),
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
			'big_image' => 'Большая картинка',
			'description' => 'Описание',
			'small_image' => 'Маленькие картинки',
			'type' => 'Тип шаблона',
            'icon' => 'Изображение',
            'del_img'=>'Удалить изображение?',
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    /*
    * Возвращает название родительской категории по id
    */
    public function getParentTypeById($id) {
        $title = $this->model()->findByPk($id)->title;
        return $title;
    }
    
    /*
    * Возвращает все категории
    */
    public function getAllTypes() {
        return CHtml::listData($this->model()->findAll(), 'id', 'title');
    }
    
    
}