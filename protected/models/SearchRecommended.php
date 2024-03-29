<?php

/**
 * This is the model class for table "search_recommended".
 *
 * The followings are the available columns in table 'search_recommended':
 * @property integer $id
 * @property integer $menu_item_id
 * @property integer $sorted
 * @property string $text
 *
 * The followings are the available model relations:
 * @property MenuItems $menuItem
 */
class SearchRecommended extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SearchRecommended the static model class
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
		return 'search_recommended';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_item_id, sorted', 'numerical', 'integerOnly'=>true),
			array('text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_item_id, sorted, text', 'safe', 'on'=>'search'),
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
			'menuItem' => array(self::BELONGS_TO, 'MenuItems', 'menu_item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menu_item_id' => 'Пункт меню',
			'sorted' => 'Приоритет',
			'text' => 'Контент',
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
		$criteria->compare('menu_item_id',$this->menu_item_id);
		$criteria->compare('sorted',$this->sorted);
		$criteria->compare('text',$this->text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //  Метод устанавливает сортировку по-умолчанию
        public function defaultScope()
        {
                return array(
                    'order'=>$this->getTableAlias(false, false).'.sorted ASC'
                );
        }
}