<?php

/**
 * This is the model class for table "akcii_group".
 *
 * The followings are the available columns in table 'menu_items':
 * @property integer $id
 * @property integer $item_id
 * @property string $description
 * @property integer $published
 * @property integer $range
 * @property text $anchor
 *
 * The followings are the available model relations:
 * @property MenuItems $menu
 */

class AkciiGroup extends CActiveRecord
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
		return 'akcii_group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('range', 'numerical', 'integerOnly'=>true, 'message'=>'Порядковый номер должен быть числом'),
			//array('id, item_id', 'required'),
			array('published, description,anchor', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, published, range, description,anchor', 'safe', 'on'=>'search'),
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
                        'akcii_product'=>array(self::HAS_MANY,'AkciiProduct','group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_id' => 'ID элемента',
			'description' => 'Описание',
			'published' => 'Публиковать',
			'range' => 'Порядковый номер на странице',
                        'anchor'=>'Якорь (для ссылки на группу)',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('range',$this->range);
                $criteria->compare('anchor',$this->anchor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        protected function afterSave() {
            parent::afterSave();
            //меняем статус публикации у товаров группы (действует только для снятия публикации)
            if (!$this->published){
                $group=MenuItems::model()->findByPk((int)$this->item_id-1);
                $group_products=$group->descendants()->findAll('level=5');
                    foreach($group_products as $product){
                        $product_akcii=AkciiProduct::model()->find('item_id=:id',array(':id'=>$product->id));
                        if(!empty($product_akcii)&&($product_akcii->published!=$this->published)){
                            $product_akcii->published=$this->published;
                            $product_akcii->save();
                    }
                }
            }
        }
  
        
}