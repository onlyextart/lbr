<?php

/**
 * This is the model class for table "search_log".
 *
 * The followings are the available columns in table 'search_log':
 * @property integer $id
 * @property string $query
 * @property string $transition
 * @property string $domain
 * @property string $data
 * @property string $params
 */
class SearchLog extends CActiveRecord
{
    
        const CATALOG = 1;
        const NEWS = 2;
        const OTHER = 3;
        
        public static $types = array(
            'catalog'=>SearchLog::CATALOG,
            'news'=>SearchLog::NEWS,
            'other'=>SearchLog::OTHER,
        );
        
        public static function labelTypes() {
            return array(
                'catalog'=>'Найдено в каталоге',
                'news'=>'Найдено в новостях',
                'other'=>'Найдено в разном'
            );
        }

        /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SearchLog the static model class
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
		return 'search_log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('query, transition, domain, data, params', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, query, transition, domain, data, params', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'query' => 'Query',
			'transition' => 'Transition',
			'domain' => 'Domain',
			'data' => 'Data',
			'params' => 'Params',
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
		$criteria->compare('query',$this->query,true);
		$criteria->compare('transition',$this->transition,true);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('params',$this->params,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /*
         * @return quick search tables
         */
        public static $tables_quick = array(
                'menu_items'=>array('header', 'meta_description')
        );

        public function getSearchResult($q, $type, $offset, $limit)
        {
            if (!$q){return false;}
                $return = $this->getSearchResultDb($q, false, $type, $offset, $limit);
                if($return){
                    return $return;
                }
        }
        
        public function getResultCount($q, $type)
        {
            if (!$q){return false;}
                $return = $this->getSearchResultDb($q, true, $type);
                if($return){
                    return $return;
                }
        }
        
        public function getQuickResult($q)
        {
            if (!$q){return false;}
//            if ($this->prepareSqlite()){
                $return = $this->getQuickResultDb($q);
                if($return){
                    return $return;
                }
//            }
        }

        public function prepareSqlite()
        {
            function lower($str){
                $return = str_replace(array(")", "(", "'", '"' ), "", $str);
                return mb_strtolower(strip_tags($return), "UTF-8");
            }
            function sql_regexp($x,$y){
                $match = preg_match("`$y`i",$x);
                return (int)$match;
            }
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('regexp', 'sql_regexp', 2);
            return true;
        }
        
        /*
         * 
	 * Returns the search result form DB
	 * @param array $query array query string.
         * @param boolean $count if true - returns the count of matches found
	 * @return array search result array.
         * 
	 */
        private function getSearchResultDb($q, $count = false, $type = 1, $offset = false, $limit = false)
        {
            $str = $this->getPhrasesArray($q);
            array_unshift($str, $q);
            $fields = SearchIndex::model()->getMetaData()->tableSchema->columns;
            $where = array('or');
            $where1 = array('or');
            $select = '*';
            if($count){
                $select = 'count(*) as num';
            }
            foreach ($fields as $field=>$obj){
                if($obj->type==='string' && $obj->name!=='date')
                {
                    $where = array_merge((array)$where, (array)$this->getWhereRegExp($str, $field));
                }
            }
            switch ($type){
                case SearchLog::CATALOG:
                    array_push($where1, 'type='.MenuItems::PRODUCT_MENU_ITEM_TYPE, 'type='.MenuItems::BANNERS_MENU_ITEM_TYPE);
                   break;
                case SearchLog::NEWS:
                    array_push($where1, 'type='.MenuItems::NEWS_MENU_ITEM_TYPE);
                    break;
                default:
                    array_push($where1, 'type IN ('.MenuItems::CONTACT_MENU_ITEM_TYPE.', '.MenuItems::STATIC_MENU_ITEM_TYPE.')');
                    break;
            }
             $query_params = array(
                'select'=>$select,
                'from'=>'search_index',
                'where'=>array('and', $where1, $where)
            );
             
            if($offset!==false && $limit!==false){
                $query_params['offset'] = $offset;
                $query_params['limit'] = $limit;
            }
            $result = Yii::app()->db->createCommand($query_params)->queryAll();
            
            if($count){
                return $result[0]['num'];
            }
            return $result;
        }
        
        private function getWhereRegExp($str, $field){
            if(!$str || !$field){
                return false;
            }
            $where = array();
            foreach ($str as $query){
                $query = str_replace(array(")", "(", "'", '"', '&', '?' ), "", $query);
                array_push($where, "regexp(lower(".$field."), '".$query."')");
            }
            return $where;
        }
        
        /*
         * 
	 * Returns the search quick result form DB
	 * @param array $query array query string.
	 * @return array search result array.
         * 
	 */
        private function getQuickResultDb($query)
        {
            $tables = self::$tables_quick;
            /*
             * $product_type, $category_type - menu items type (4, 0)
             */
            $product_type = MenuItems::PRODUCT_MENU_ITEM_TYPE;
            $category_type = MenuItems::BANNERS_MENU_ITEM_TYPE;
            $where = array('or');
            foreach ($tables['menu_items'] as $row_name)
            {
                $query = str_replace(array(")", "(", "'", '"' ), "", $query);
                array_push($where, "lower(".$row_name.") LIKE lower('%".$query."%')");
            }
            $query_result = Yii::app()->db->createCommand()
                            ->select('id, '.  implode(', ', $tables['menu_items']))
                            ->from('menu_items')
                            ->where(array('and', 'published=1', $tables['menu_items'][0].'!=""' ,array('or','type='.$product_type, array('and', 'type='.$category_type, 'level>4')), $where))
                            ->limit(15)
                            ->queryAll();
            return $query_result;
        }
        
        /*
         * 
         * Returns an array of morphological forms request
         * @param string $query query string
         * @return array array of query string
         * 
         */
        public function getPhrasesArray($query)
        {
            $stemmer = new Lingua_Stem_Ru();
            $phrases = array();
            
            $word = $stemmer->stem_string($query);
            $word_array = explode(' ', $word);
            if (count($word_array)>1)
                array_push($phrases, implode(' ', $word_array));
            foreach ($word_array as $item)
            {
                array_push($phrases, $item);
            }
            return $phrases;
        }
}