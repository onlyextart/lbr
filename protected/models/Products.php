<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id
 * @property string $name
 * @property integer $maker
 * @property string $image
 * @property string $video
 * @property string $review
 * @property string $features
 * @property string $construct_features
 * @property string $experience
 * @property string $image_type
 * @property string $image_top_left
 * @property string $image_top_right
 * @property string $image_bottom_left
 * @property string $image_bottom_right
 *
 * The followings are the available model relations:
 * @property HowToSell[] $howToSells
 * @property ProductGallery[] $productGalleries
 * @property ProductVideo[] $productVideos
 * @property ProductsRegion[] $productsRegions
 */
class Products extends CActiveRecord
{
	
        const DEFAULT_IMAGE_TYPE = 0;
        const TIMETOBUY_IMAGE_TYPE = 1;
        /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Products the static model class
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
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('maker', 'numerical', 'integerOnly'=>true),
                        array('name', 'required'),
			array('name, image, video, review, features, construct_features, experience, image_type, image_top_left, image_top_right, image_bottom_left, image_bottom_right', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, maker, image, video, review, features, construct_features, experience, image_type, image_top_left, image_top_right, image_bottom_left, image_bottom_right', 'safe', 'on'=>'search'),
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
			'howToSells' => array(self::HAS_MANY, 'HowToSell', 'product_id'),
			'productGalleries' => array(self::HAS_MANY, 'ProductGallery', 'product_id'),
			'productVideos' => array(self::HAS_MANY, 'ProductVideo', 'product_id'),
			'productsRegions' => array(self::HAS_MANY, 'ProductsRegion', 'product_id'),
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
			'maker' => 'Maker',
			'image' => 'Image',
			'video' => 'Video',
			'review' => 'Review',
			'features' => 'Features',
			'construct_features' => 'Construct Features',
			'experience' => 'Experience',
			'image_type' => 'Image Type',
			'image_top_left' => 'Image Top Left',
			'image_top_right' => 'Image Top Right',
			'image_bottom_left' => 'Image Bottom Left',
			'image_bottom_right' => 'Image Bottom Right',
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
		$criteria->compare('maker',$this->maker);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('review',$this->review,true);
		$criteria->compare('features',$this->features,true);
		$criteria->compare('construct_features',$this->construct_features,true);
		$criteria->compare('experience',$this->experience,true);
		$criteria->compare('image_type',$this->image_type,true);
		$criteria->compare('image_top_left',$this->image_top_left,true);
		$criteria->compare('image_top_right',$this->image_top_right,true);
		$criteria->compare('image_bottom_left',$this->image_bottom_left,true);
		$criteria->compare('image_bottom_right',$this->image_bottom_right,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //Метод возвращает все типы титульного изображения в виде массива, где:
        // ключ - id типа, а значение - имя типа
        static function getImageTypes()
        {
            $types = array();
            $types[BannerImages::DEFAULT_IMAGE_TYPE] = 'Обычное';
            $types[BannerImages::TIMETOBUY_IMAGE_TYPE] = 'Время покупать';
            return $types;
        }
        
        //Метод проверяет назначен ли данный продукт пункту меню для его отображения
        //Принимает единственный аргумент - ID пункта меню
        public function hasMenuItem( $menuItemId ){
                if( !$this->isNewRecord ){
                    if( MenuItemsContent::model()->with('item')->find( 'page_id='.$this->id.
                            ' AND item_id='.$menuItemId.
                            ' AND item.type='.MenuItems::PRODUCT_MENU_ITEM_TYPE ) !== null){
                        return true;
                    }
                }
                return false;
        }
        
        //Метод генерирует мета теги страницы товара
        public function metaSave() {
            //id пункта меню данного товара
            $id = Yii::app()->db->createCommand()->select('item_id')->from('menu_items_content')->where('page_id='.$this->id)->queryRow();
            
            if(!isset($id) || $id===NULL){
                Yii::app()->user->setFlash('saved','Не найден пункт меню. Возможно Вы еще не создали пункт меню для данной страницы, либо не привязали эту страницу к необходимому пункту меню. Мета-теги НЕ будут сгенерированы.');
//                throw new CHttpException(404, 'Не найден пункт меню. Возможно Вы еще не создали пункт меню для данной страницы, либо не привязали эту страницу к необходимому пункту меню');
                return parent::afterSave();
            }
            $menu_item = MenuItems::model()->findByPk($id['item_id']);
            
            if(empty($menu_item->meta_description))
                $menu_item->meta_description = preg_replace('/\s[^\s]+$/', '', substr(strip_tags($this->review), 0, 130));
            
            if(empty($menu_item->meta_title))
                $menu_item->meta_title = $this->name. ' купить в ЛБР-агромаркет.';
            
            $menu_item->saveNode();
            
            return parent::afterSave();
        }
}