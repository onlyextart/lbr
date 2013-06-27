<?php

/**
 * This is the model class for table "banners".
 *
 * The followings are the available columns in table 'banners':
 * @property integer $id
 * @property integer $lft
 * @property integer $rt
 * @property string $icon
 * @property integer $type
 * @property integer $published
 * @property integer $level
 * @property integer $root
 *
 * The followings are the available model relations:
 * @property BannerImages[] $bannerImages
 * @property BannerRegion[] $bannerRegions
 * @property MakersInBanner[] $makersInBanners
 */
class Banners extends CActiveRecord
{
	
        const DEFAULT_BANNER_TYPE = 0;
        const BIG_BANNER_TYPE = 1;
        const DIECI_BANNER_TYPE = 2;
    
        /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Banners the static model class
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
		return 'banners';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lft, rt, type, published, level, root', 'numerical', 'integerOnly'=>true),
			array('icon', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lft, rt, icon, type, published, level, root', 'safe', 'on'=>'search'),
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
			'bannerImages' => array(self::HAS_MANY, 'BannerImages', 'banner_id'),
			'bannerRegions' => array(self::HAS_MANY, 'BannerRegion', 'banner_id'),
			'makersInBanners' => array(self::HAS_MANY, 'MakersInBanner', 'banner_id'),
                        'bannerLinks' => array(self::HAS_MANY, 'BannerLinks', 'banner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lft' => 'Lft',
			'rt' => 'Rt',
			'icon' => 'Иконка',
			'type' => 'Тип',
			'published' => 'Опубликован',
			'level' => 'Level',
			'root' => 'Root',
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
		$criteria->compare('lft',$this->lft);
		$criteria->compare('rt',$this->rt);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('published',$this->published);
		$criteria->compare('level',$this->level);
		$criteria->compare('root',$this->root);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //Метод проверяет назначен ли производитель данному баннеру
        //Принимает единственный аргумент - ID производителя
        public function hasMaker( $makerId ){
                if( !$this->isNewRecord ){
                    if(MakersInBanner::model()->find( 'maker_id='.$makerId.' AND banner_id='.$this->id ) !== null){
                        return true;
                    }
                }
                return false;
        }
        
        //Метод проверяет назначен ли данный баннер пункту меню для его отображения
        //Принимает единственный аргумент - ID пункта меню
        public function hasMenuItem( $menuItemId ){
                if( !$this->isNewRecord ){
                    if( MenuItemsContent::model()->with('item')->find( 'page_id='.$this->id
                            .' AND item_id='.$menuItemId
                            .' AND item.type='.MenuItems::BANNERS_MENU_ITEM_TYPE ) !== null){
                        return true;
                    }
                }
                return false;
        }
        
        //Метод проверяет назначен ли пункт меню в качестве ссылки для кнопки "КАТАЛОГ"
        //Принимает единственный аргумент - ID пункта меню
        public function hasMenuItemLink( $menuItemId ){
                if( !$this->isNewRecord ){
                    if( BannerLinks::model()->find( 'banner_id='.$this->id.' AND menu_item_id='.$menuItemId ) !== null ){
                        return true;
                    }
                }
                return false;
        }
        
        //Метод возвращает все типы баннеров в виде массива, где:
        //ключ - id типа, а значение - имя типа
        static function getBannerTypes(){
            $types = array();
            $types[Banners::DEFAULT_BANNER_TYPE] = 'Обычный';
            $types[Banners::BIG_BANNER_TYPE] = 'Большой';
            $types[Banners::DIECI_BANNER_TYPE] = 'DIECI';
            return $types;
        }
}