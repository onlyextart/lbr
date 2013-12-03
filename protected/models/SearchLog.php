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
        
        public static $menuType = array(
            'products'=>array('type'=>MenuItems::PRODUCT_MENU_ITEM_TYPE),
        );
        
        public static $tables = array(
                'products'=>array(
                    'name', 'review', 'features', 'construct_features', 'experience'
                ),
                'products_region'=>array(
                    'additional_review'
                ),
                'contacts'=>array(
                    'name', 'address', 'telephone', 'work_time', 'email', 'info'
                ),
                'news'=>array(
                    'header'
                ),
                'news_region'=>array(
                    'content', 'description'
                ),
                'pages'=>array(
                    'name'
                ),
                'pages_region'=>array(
                    'content'
                ),
            );
        public static $tables_quick = array(
                'menu_items'=>'name'
            );
        public static function searchTables($quick = false)
        {
            $select = array(); $tables = array(); $all = array();
            foreach (self::$tables as $table=>$row){
                foreach($row as $name){
                    array_push($select, $table.'.'.$name);
                }
                array_push($tables, $table);
                array_push($all, $table.'.*');
            }
            if ($quick){return self::$tables_quick;}
            return array('select'=>$select, 'tables'=>$tables, 'all'=>$all);
        }

        public function getSearchResult($q, $tables = false)
        {
            if (!$q)
            {
                return false;
            }
            $return = $this->getSearchResultDb($q, false, $tables);
            if($return){
                return $return;
            }
            return false;
        }
        
        public function getResultCount($q)
        {
            if (!$q)
            {
                return false;
            }
            if ($this->prepareSqlite()){
                $return = $this->getSearchResultDb($q, true);
                if($return){
                    $result = 0;
                    $params = array();
                    foreach ($return as $table=>$lenght){
                        if($lenght[0]['num']>0){
                            $params['tables'][$table]['start'] = $result;
                            $result += $lenght[0]['num'];
                            $params['tables'][$table]['end'] = $result;
                        }
                    }
                    $params['count'] = $result;
                    return $params;
                }
            }
            return false;
        }
        
        public function getQuickResult($q)
        {
            if (!$q)
            {
                return false;
            }
            if ($this->prepareSqlite()){
                $return = $this->getQuickResultDb($q);
                if($return){
                    return $return;
                }
            }
        }

        private function prepareSqlite()
        {
            function lower($str){return mb_strtolower($str, "UTF-8");}
            function sql_regexp($x,$y){ 
                strip_tags($x);
                $match = preg_match("`$y`i",$x);
                return (int)$match;
            }
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('regexp', 'sql_regexp', 2);
            return true;
        }
        
        private function getSearchResultDb($q, $count = false, $tables = false)
        {
            $str = $this->getPhrasesArray($q);
            if(!$tables){
                $tables = $this->searchTables();
            }
            $resultID_array = array();
            if(!$count){
                $num = $tables['offset']+$tables['limit'];
                foreach ($tables['tables'] as $table_name=>$param){
                    if (($num < $param['start'] && $tables['offset'] < $param['start']) || $tables['offset'] > $param['end']){
                    continue;
                }
                $offset = $num-$param['start'];
                    $limit = $tables['limit'];
                    if($offset<=$tables['limit'])
                    {
                        $limit = $offset;
                        $offset = 0;
                    }else{
                        $offset -=$limit;
                    }
                    $query_result = $this->getOneTableResultDB($table_name, $str, $count, $offset, $limit);
                    if(!empty($query_result)){
                        $resultID_array[$table_name] = $query_result; 
                    }
                }
            }else{
                array_unique($str); array_unshift($str, $q);
                foreach ($tables['tables'] as $table_name){
                    $query_result = $this->getOneTableResultDB($table_name, $str, $count);
                    if(!empty($query_result)){
                        $resultID_array[$table_name] = $query_result; 
                    }
                }
            }
            return $resultID_array;
        }
        
        private function getOneTableResultDB($table_name = false, $query_array = false, $count = false, $offset = false, $limit = false){
            if(!$table_name || !$query_array){
                return false;
            }
            $where = array('or');
            $select = 'id';
            $tables = self::$tables;

            foreach($tables[$table_name] as $row){
                foreach ($query_array as $query){
                    $query = str_replace(array(")", "(", "'" ), array("\)","\(", "\""), addslashes($query));
                    array_push($where, "regexp(lower(".$row."), '".$query."')");
                }
            }
            if($count){
                $select = 'count(*) as num';
            }
            $query_params = array(
                'select'=>$select,
                'from'=>$table_name,
                'where'=>$where
            );
            if($offset!==false && $limit!==false){
                $query_params['offset'] = $offset;
                $query_params['limit'] = $limit;
            }
            $queryResult = Yii::app()->db->createCommand($query_params)->queryAll();
            return $queryResult;
        }
//        private function getSearchResultDb($q)
//        {
//            $str = $this->getPhrasesArray($q);
//            $return = array();
//            array_unique($str);
//            array_unshift($str, $q);
//            $tables = $this->searchTables();
//            foreach ($tables as $table_name=>$row_array)
//            {
//                foreach ($str as $query){
//                    $query = str_replace(array(")", "(", "'" ), array("\)","\(", "\""), addslashes($query));
//                    $where = array('or');
//                    
//                    foreach ($row_array as $row)
//                    {
//                        array_push($where, "regexp(lower(".$table_name.".".$row."), '".$query."')");
//                    }
//                    $query_result = Yii::app()->db->createCommand()
//                            ->select($table_name.'.*, menu_items_content.item_id, menu_items.meta_description')
//                            ->from($table_name)
//                            ->join('menu_items_content', $table_name.'.id=menu_items_content.page_id')
//                            ->join('menu_items', 'menu_items_content.item_id=menu_items.id')
//                            ->where($where)
//                            ->queryAll();
//                    
//                    if (!empty($query_result)){
//                        foreach ($query_result as $result){
//                            if (!in_array($result, $return, TRUE)){
//                                array_push($return, $result);
//                            }
//                        }
//                    }
//                }
//            }
//            array_unique($return, SORT_NUMERIC);
//            return $return;
//        }
        
        private function getQuickResultDb($query)
        {
            $return = array();
            $tables = $this->searchTables(true);
            $product_type = MenuItems::PRODUCT_MENU_ITEM_TYPE;
            foreach ($tables as $table_name=>$row_name)
            {
                $query_result = Yii::app()->db->createCommand()
                            ->select('id, '.$row_name)
                            ->from($table_name)
                            ->where("lower(".$row_name.") LIKE lower('%".$query."%') AND type=".$product_type)
                            ->limit(15)
                            ->queryAll();
                if (!empty($query_result)){
                    foreach ($query_result as $result){
                        array_push($return, $result);
                    }
                }
                
            }
            return $return;
        }
        private function getPhrasesArray($query)
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