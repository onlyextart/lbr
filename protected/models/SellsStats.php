<?php

/**
 * This is the model class for table "sells_stats".
 *
 * The followings are the available columns in table 'sells_stats':
 * @property integer $id
 * @property integer $user_id
 * @property integer $page_id
 * @property string $time
 * @property string $session
 * @property integer $video
 *
 * The followings are the available model relations:
 * @property MenuItemsContent $page
 * @property Users $user
 */
class SellsStats extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SellsStats the static model class
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
		return 'sells_stats';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, page_id, video', 'numerical', 'integerOnly'=>true),
			array('time, session', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, page_id, time, session, video', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'page_id' => 'Page',
			'time' => 'Time',
			'session' => 'Session',
			'video' => 'Video',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('session',$this->session,true);
		$criteria->compare('video',$this->video);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function setStatsDB($params)
        {
                        
        }
        
        public function updateStatsDB($params)
        {
                        
        }
}