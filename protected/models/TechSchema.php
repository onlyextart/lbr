<?php

/**
 * This is the model class for table "tech_schema".
 *
 * The followings are the available columns in table 'tech_schema':
 * @property integer $id
 * @property string $title
 * @property integer $lft
 * @property integer $rt
 * @property integer $level
 * @property integer $root
 * @property string $img
 *
 * The followings are the available model relations:
 * @property TechSchemaStage[] $techSchemaStages
 */
class TechSchema extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TechSchema the static model class
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
		return 'tech_schema';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lft, rt, level, root', 'numerical', 'integerOnly'=>true),
			array('title, img', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, lft, rt, level, root, img', 'safe', 'on'=>'search'),
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
			'techSchemaStages' => array(self::HAS_MANY, 'TechSchemaStage', 'schema_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'lft' => 'Lft',
			'rt' => 'Rt',
			'level' => 'Level',
			'root' => 'Root',
			'img' => 'Img',
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
		$criteria->compare('lft',$this->lft);
		$criteria->compare('rt',$this->rt);
		$criteria->compare('level',$this->level);
		$criteria->compare('root',$this->root);
		$criteria->compare('img',$this->img,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function behaviors()
        {
            return array(
                'nestedSetBehavior'=>array(
                    'class'=>'ext.yiiext.behaviors.trees.NestedSetBehavior',
                    'leftAttribute'=>'lft',
                    'rightAttribute'=>'rt',
                    'levelAttribute'=>'level',
                    'rootAttribute'=>'root',
                    'hasManyRoots'=>true,
                ),
            );
        }
}