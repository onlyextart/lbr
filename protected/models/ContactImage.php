<?php

/**
 * This is the model class for table "contact_image".
 *
 * The followings are the available columns in table 'contact_image':
 * @property integer $id
 * @property string $path
 * @property string $description
 * @property string $alt
 * @property string $title
 * @property integer $contact_id
 * @property integer $sorting
 *
 * The followings are the available model relations:
 * @property Contacts $contact
 */
class ContactImage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactImage the static model class
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
		return 'contact_image';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_id, sorting', 'numerical', 'integerOnly'=>true),
			array('path, description, alt, title', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, path, description, alt, title, contact_id, sorting', 'safe', 'on'=>'search'),
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
			'contact' => array(self::BELONGS_TO, 'Contacts', 'contact_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'path' => 'Ïóòü',
			'description' => 'Îïèñàíèå',
			'alt' => 'Alt',
			'title' => 'Title',
			'contact_id' => 'Contact',
			'sorting' => 'Sorting',
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
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('sorting',$this->sorting);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function defaultScope()
        {
                return array(
                    'order'=>$this->getTableAlias(false, false).'.sorting ASC'
                );
        }
        
        protected function afterSave(){
            parent::afterSave();
            if($this->sorting===null){
                $model = self::model()->findByPk($this->id);
                $model->sorting=$this->id;
                $model->save(false);
            }
            return true;
        }
}