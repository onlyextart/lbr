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
        
        public static function searchTables($quick = false)
        {
            $tables = array(
                'banner_region'=>array(
                    'description', 'name'
                ),
                'contacts'=>array(
                    'name', 'address', 'telephone', 'work_time', 'email', 'info'
                ),
                'makers'=>array(
                    'name', 'description'
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
                'products'=>array(
                    'name', 'review', 'features', 'construct_features', 'experience'
                ),
                'products_region'=>array(
                    'additional_review'
                ),
                'search_log'=>array(
                    'query'
                )
            );
            $tables_quick = array(
                'banner_region'=>'name',
                'contacts'=>'name',
                'makers'=>'name',
                'news'=>'header',
                'pages'=>'name',
                'products'=>'name',
            );
            if ($quick){
                return $tables_quick;
            }
            return $tables;
        }

        public function getSearchResult($q)
        {
            if (!$q)
            {
                return false;
            }
            if ($this->prepareSqlite()){
                if($return = $this->getSearchResultDb($q))
                    return $return;
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
                if($return = $this->getQuickResultDb($q))
                    return $return;
            }
        }

        private function prepareSqlite()
        {
            function lower($str){return mb_strtolower($str, "UTF-8");}
            function sql_regexp($x,$y){ return (int)preg_match("`$y`i",$x);}
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('regexp', 'sql_regexp', 2);
            return true;
        }
        
        private function getSearchResultDb($q)
        {
            $str = $this->getPhrasesArray($q);
            $return = array();
            array_unique($str);
            $tables = $this->searchTables();
            foreach ($tables as $table_name=>$row_array)
            {
                foreach ($str as $key=>$query){
                    $query = str_replace(array(")", "(", "'" ), array("\)","\(", "\""), addslashes($query));
                    $where = array('or');
                    foreach ($row_array as $indx=>$row)
                    {
                        array_push($where, "regexp(lower(".$row."), '".$query."')");
                    }
                    $query_result = Yii::app()->db->createCommand()
                            ->select('*')
                            ->from($table_name)
                            ->where($where)
                            ->queryAll();
                    
                    if (!empty($query_result)){
                        foreach ($query_result as $result){
                            if (!in_array($result, $return, TRUE))
                                array_push($return, $result);
                        }
                    }
                        
                    
                }
            }
            array_unique($return, SORT_NUMERIC);
            return $return;
        }
        
        private function getQuickResultDb($query)
        {
            $return = array();
            $tables = $this->searchTables(true);
            foreach ($tables as $table_name=>$row_name)
            {
                $query_result = Yii::app()->db->createCommand()
                            ->select('*')
                            ->from($table_name)
                            ->where("lower(".$row_name.") LIKE lower('%".$query."%')")
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
                array_push($phrases, implode('[^\s]* ', $word_array));
            foreach ($word_array as $item)
            {
                array_push($phrases, $item);
            }
            return $phrases;
        }
}