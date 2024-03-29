<?php

/**
 * This is the model class for table "kp".
 *
 * The followings are the available columns in table 'kp':
 * @property integer $id
 * @property string $user
 * @property string $temp_id
 * @property string $price
 * @property string $price_blue
 * @property string $price_min
 * @property string $client
 * @property string $header
 * @property string $filial
 * @property string $filial_bottom
 * @property integer $control_number
 * @property integer $finance_block
 * @property string $product_info
 * @property string $login
 */
class Kp extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Kp the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'kp';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('control_number', 'numerical', 'integerOnly' => true),
            array('user, temp_id, price, price_blue, price_min, client, header, filial, filial_bottom, finance_block, finance_block_text, product_info, login', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, user, temp_id, price, price_blue, price_min, client, header, filial, filial_bottom, control_number, finance_block, finance_block_text, product_info, login', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user' => 'User',
            'temp_id' => 'Temp',
            'price' => 'Price',
            'price_blue' => 'Price_blue',
            'price_min' => 'Price min',
            'client' => 'Client',
            'header' => 'Header',
            'filial' => 'Filial',
            'filial_bottom' => 'Filial Bottom',
            'control_number' => 'Control Number',
            'finance_block' => 'finance_block',
            'finance_block_text' => 'finance_block_text',
            'product_info' => 'product_info',
            'login' => 'Login',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user', $this->user, true);
        $criteria->compare('temp_id', $this->temp_id, true);
        $criteria->compare('price', $this->price, true);
        $criteria->compare('client', $this->client, true);
        $criteria->compare('header', $this->header, true);
        $criteria->compare('filial', $this->filial, true);
        $criteria->compare('filial_bottom', $this->filial_bottom, true);
        $criteria->compare('control_number', $this->control_number);
        $criteria->compare('price_blue', $this->price_blue, true);
        $criteria->compare('price_min', $this->price_min, true);
        $criteria->compare('finance_block', $this->price_blue, true);
        $criteria->compare('finance_block_text', $this->price_blue, true);
        $criteria->compare('product_info', $this->product_info, true);
        $criteria->compare('login', $this->login, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
