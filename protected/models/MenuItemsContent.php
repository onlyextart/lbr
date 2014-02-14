<?php

/**
 * This is the model class for table "menu_items_content".
 *
 * The followings are the available columns in table 'menu_items_content':
 * @property integer $id
 * @property integer $item_id
 * @property integer $page_id
 * @property integer $sorting
 *
 * The followings are the available model relations:
 * @property MenuItems $item
 */
class MenuItemsContent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuItemsContent the static model class
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
		return 'menu_items_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, page_id, sorting', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, page_id, sorting', 'safe', 'on'=>'search'),
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
			'item' => array(self::BELONGS_TO, 'MenuItems', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_id' => 'Item',
			'page_id' => 'Page',
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
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('sorting',$this->sorting);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        
        protected function afterSave(){
            parent::afterSave();
            if($this->sorting===null){
                $model = MenuItemsContent::model()->findByPk($this->id);
                $model->sorting = $this->id;
                $model->save(false);
            }
            return true;
        }
        
        public function defaultScope()
        {
                return array(
                    'order'=>$this->getTableAlias(false, false).'.sorting ASC'
                );
        }
        
        public function orederAndLimit( $direction='ASC', $limit=1 )
        {
            $this->getDbCriteria()->mergeWith(array(
                'order'=>'sorting '.$direction,
                'limit'=>$limit,
            ));
            return $this;
        }
}