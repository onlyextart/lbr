<?php

/**
 * This is the model class for table "menu_items".
 *
 * The followings are the available columns in table 'menu_items':
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property string $icon
 * @property integer $lft
 * @property integer $rt
 * @property string $meta_description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $seo_text
 * @property integer $menu_id
 * @property boolean $published
 * @property integer $group_id
 * @property integer $type
 *
 * The followings are the available model relations:
 * @property MenuGroups $group
 * @property Menu $menu
 * @property MenuItemsContent[] $menuItemsContents
 */
class MenuItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuItems the static model class
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
		return 'menu_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lft, rt, menu_id, group_id, type', 'numerical', 'integerOnly'=>true),
			array('name, alias, icon, meta_description, meta_title, meta_keywords, seo_text, published', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, alias, icon, lft, rt, meta_description, meta_title, meta_keywords, seo_text, menu_id, published, group_id, type', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'MenuGroups', 'group_id'),
			'menu' => array(self::BELONGS_TO, 'Menu', 'menu_id'),
			'menuItemsContents' => array(self::HAS_MANY, 'MenuItemsContent', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'alias' => 'Alias',
			'icon' => 'Icon',
			'lft' => 'Lft',
			'rt' => 'Rt',
			'meta_description' => 'Meta Description',
			'meta_title' => 'Meta Title',
			'meta_keywords' => 'Meta Keywords',
			'seo_text' => 'Seo Text',
			'menu_id' => 'Menu',
			'published' => 'Published',
			'group_id' => 'Group',
			'type' => 'Type',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('lft',$this->lft);
		$criteria->compare('rt',$this->rt);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('seo_text',$this->seo_text,true);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('published',$this->published);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}