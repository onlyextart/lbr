<?php

/**
 * This is the model class for table "search_index".
 *
 * The followings are the available columns in table 'search_index':
 * @property integer $id
 * @property integer $menu_item_id
 * @property string $header
 * @property string $keywords
 * @property string $description
 * @property string $content
 * @property integer $type
 * @property integer $status
 * @property string $date
 *
 * The followings are the available model relations:
 * @property MenuItems $menuItem
 */
class SearchIndex extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SearchIndex the static model class
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
		return 'search_index';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_item_id, type, status', 'numerical', 'integerOnly'=>true),
			array('header, keywords, description, content, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_item_id, header, keywords, description, content, type, status, date', 'safe', 'on'=>'search'),
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
			'menuItem' => array(self::BELONGS_TO, 'MenuItems', 'menu_item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menu_item_id' => 'ID Пункта меню',
			'header' => 'Заголовок',
			'keywords' => 'Ключевые слова',
			'description' => 'Описание',
			'content' => 'Содержание',
			'type' => 'Тип',
			'status' => 'Статус',
			'date' => 'Дата',
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
		$criteria->compare('menu_item_id',$this->menu_item_id);
		$criteria->compare('header',$this->header,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->type);
		$criteria->compare('date',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public static $status = array(
            '0'=>'Не проиндексировано',
            '1'=>'Участвует в поиске',
            '2'=>'Не участвует в поиске'
        );
        
        /*
         * Reindexing all table
         * @return boolean, false - error, not added to the index
         */
        public static function reindexAll(){
            
        }
        
        /*
         * Reindexing one table
         * @param $table string, table name
         * @return boolean, false - error, not added to the index
         */
        public static function reindexOneTable($table){
            //$type - integer, get type menu item
            $type = self::getMenuItemType($table);
            $name = MenuItems::getMenuItemsType();
            $return = array($name[$type]=>array());
            
            $params = array(
                            'select'=>'id',
                            'from'=>'menu_items',
                            'where'=>'type=:type AND published=:pub',
                            'params'=>array(':type'=>$type, ':pub'=>1),
                        );
            if($table=='banners'){
                $params['where']='type=:type AND published=:pub AND level>4';
            }
            if($table=='contacts'){
                $params['where']='type=:type AND published=:pub AND level=4';
            }
            $model = Yii::app()->db->createCommand($params)->queryAll();
            
            foreach ($model as $m){
                $r = self::reindexOneItem($m['id'], $table);
                array_push($return[$name[$type]], $r);
            }
            return $return;
        }
        
        /*
         * Reindexing one page
         * @param $id integer, id menu_item
         * @return boolean, false - error, not added to the index
         */
        public static function reindexOneItem($id, $table){
//            $result = array();
            $p_id = Yii::app()->db->createCommand()
                    ->select('t.*, menu_items_content.page_id')
                    ->from('menu_items as t')
                    ->join('menu_items_content', 't.id=menu_items_content.item_id')
                    ->where('t.id='.$id)
                    ->queryAll();
            $new = array();
            foreach ($p_id as $i){
                $m = self::getOnePageContentDb($i['page_id'], $table);
                array_push($new, self::prepareToIndex($i, $m, $table));
            }
            $ready = self::reindex($new);
            if($ready){
                return $ready;
            }
        }
        
        private function getOnePageContentDb($page_id, $table){
            if(!$page_id){
                return false;
            }
            $criteria = new CDbCriteria();
            $criteria->condition = 't.id='.$page_id.' AND t.published=1';
            $criteria->select = '*';
            $criteria->together = true;
            
            switch ($table) {
                case 'banners':
                    $criteria->with = array('bannerRegions');
                    $model = Banners::model()->find($criteria);
                    break;
                case 'products':
                    $criteria->with = array('productsRegions');
                    $criteria->condition = 't.id='.$page_id;
                    $model = Products::model()->find($criteria);
                    break;
                case 'contacts':
                    $criteria->together = false;
                    $model = Contacts::model()->find($criteria);
                    break;
                case 'news':
                    $criteria->with = array('newsRegions');
                    $model = News::model()->find($criteria);
                    break;
                default:
                    $criteria->with = array('pagesRegions');
                    $model = Pages::model()->find($criteria);
                    break;
            }
            return $model;
        }

        /*
         * Rerurn clear text format
         * @param $text array - array with text
         * @return string
         */
        private function clearText($text){
            if(is_array($text)){
                $result = '';
                foreach ($text as $str){
                    $str = preg_replace('/[^a-zA-ZА-Яа-я0-9-_.\/]isu/', ' ', strip_tags(html_entity_decode(strip_tags($str))));
//                    $str = str_replace(array('.', '  '), array('. ', ' '),$str);
                    $result .= $str;
                }
                return $result;
            }
        }

        private function prepareToIndex($menu, $model, $table){
            $r_content = '';
            switch ($table) {
                case 'banners':
                    foreach ($model->bannerRegions as $content){
                        $r_content .= self::clearText(array($content->name, $content->description));
                    }
                    break;
                case 'products':
                    $r_content .= self::clearText(array($model->name, $model->review, $model->features,
                                                            $model->construct_features, $model->experience));
                    foreach ($model->productsRegions as $content){
                        $r_content .= self::clearText(array($content->additional_review));
                    }
                    break;
                case 'contacts':
                    $r_content .= self::clearText(array($model->address));
                    break;
                case 'news':
                    $r_content .= self::clearText(array($model->header));
                    foreach ($model->newsRegions as $content){
                        $r_content .= self::clearText(array($content->content, $content->description));
                    }
                    break;
                default:
                    $r_content .= self::clearText(array($model->name));
                    foreach ($model->pagesRegions as $content){
                        $r_content .= self::clearText(array($content->content));
                    }
                    break;
            }
            $header = $menu['header'];
            if($header=='' || $header==' '){
                $header = $menu['name'];
            }
            
            $status = $_POST['reindex']['status'];
            
            $result = array(
                'menu_item_id'=>$menu['id'],
                'header'=>$header,
                'keywords'=>$menu['meta_keywords'],
                'description'=>$menu['meta_description'],
                'content'=>$r_content,
                'type'=>$menu['type'],
                'status'=>$status,
                'date'=> date('Y-m-d H:i:s')
            );
            return $result;
        }
        
        private function reindex($params){
            if(empty($params)){
                return false;
            }
            $res = $params[0];
            if(count($params)>1){
                for($i=1; $i<count($params); $i++){
                    $res['description'] .= $params[$i]['description'];
                    $res['content'] .= $params[$i]['content'];
                }
            }
            $old = SearchIndex::model()->exists('menu_item_id='.$res['menu_item_id']);
            if($old){
                $model = SearchIndex::model()->find('menu_item_id='.$res['menu_item_id']);
            }else{
                $model = new SearchIndex();
            }
            $model->attributes = $res;
            if($model->save()){
                return $res;
            }
            return false;
        }
        
        /*
         * Return menu item type
         * @param $table string, table name
         * @return integer
         */
        public static function getMenuItemType($table){
            switch($table){
                case 'contacts':
                    $return = MenuItems::CONTACT_MENU_ITEM_TYPE;
                    break;
                case 'products':
                    $return = MenuItems::PRODUCT_MENU_ITEM_TYPE;
                    break;
                case 'news':
                    $return = MenuItems::NEWS_MENU_ITEM_TYPE;
                    break;
                case 'pages':
                    $return = MenuItems::STATIC_MENU_ITEM_TYPE;
                    break;
                default :
                    $return = MenuItems::BANNERS_MENU_ITEM_TYPE;
            }
            return $return;
        }
}