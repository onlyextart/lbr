<?php

/**
 * This is the model class for table "akcii_product".
 *
 * The followings are the available columns in table 'akcii_product':
 * @property integer $id
 * @property integer $item_id
 * @property integer $group_id
 * @property string $description
 * @property integer $published
 * @property integer $range
 * @property integer $solid_type
 * @property string $solid_text_top
 * @property string $solid_text_bottom
 * @property integer $solid_percent

 */

class AkciiProduct extends CActiveRecord
{
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AkciiGroup the static model class
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
		return 'akcii_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id,group_id,description,published,range,solid_type,solid_text_top,solid_text_bottom,solid_percent', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('item_id,group_id,description,published,range,solid_type,solid_text_top,solid_text_bottom,solid_percent', 'safe', 'on'=>'search'),
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
                  'menu_items' => array(self::BELONGS_TO, 'MenuItems', 'item_id'),
                  'akcii_group' => array(self::BELONGS_TO, 'AkciiGroup', 'group_id'),
                  'akcii_img_solid' => array(self::BELONGS_TO, 'AkciiImgSolid', 'solid_type'),       
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'item_id'=>'ID элемента',
                        'group_id'=>'ID группы',
                        'description'=>'Описание',
                        'published'=>'Опубликовать',
                        'range'=>'Порядковый номер в группе',
                        'solid_type'=>'Тип плашки',
                        'solid_text_top'=>'Верхний текст',
                        'solid_text_bottom'=>'Нижний текст',
                        'solid_percent'=>'Процент скидки',
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
		$criteria->compare('item_id',$this->item_id);
                $criteria->compare('group_id',$this->group_id);
                $criteria->compare('description',$this->description);
                $criteria->compare('published',$this->published);
                $criteria->compare('range',$this->range);
                $criteria->compare('solid_type',$this->solid_type);
                $criteria->compare('solid_text_top',$this->solid_text_top);
                $criteria->compare('solid_text_bottom',$this->solid_text_bottom);
                $criteria->compare('solid_percent',$this->solid_percent);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
  
        
}