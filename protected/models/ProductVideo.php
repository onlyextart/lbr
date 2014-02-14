<?php

/**
 * This is the model class for table "product_video".
 *
 * The followings are the available columns in table 'product_video':
 * @property integer $id
 * @property integer $product_id
 * @property string $video_code
 * @property integer $sorting
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Products $product
 */
class ProductVideo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductVideo the static model class
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
		return 'product_video';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, sorting', 'numerical', 'integerOnly'=>true),
			array('video_code, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, video_code, sorting, description', 'safe', 'on'=>'search'),
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
			'video_code' => 'Video Code',
			'sorting' => 'Sorting',
			'description' => 'Description',
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
		$criteria->compare('video_code',$this->video_code,true);
		$criteria->compare('sorting',$this->sorting);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}