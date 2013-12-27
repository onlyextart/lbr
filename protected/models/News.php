<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $header
 * @property string $alias
 * @property string $date
 * @property boolean $published
 *
 * The followings are the available model relations:
 * @property NewsRegion[] $newsRegions
 */
class News extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return News the static model class
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
        return 'news';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('header, alias, date, published', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, header, alias, date, published', 'safe', 'on'=>'search'),
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
            'newsRegions' => array(self::HAS_MANY, 'NewsRegion', 'news_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'header' => 'Заголовок',
            'alias' => 'Alias',
            'date' => 'Дата',
            'published' => 'Статус',
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
        $criteria->compare('header',$this->header,true);
        $criteria->compare('alias',$this->alias,true);
        $criteria->compare('date',$this->date,true);
        $criteria->compare('published',$this->published);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}
