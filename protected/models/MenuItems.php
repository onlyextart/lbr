<?php

/**
 * This is the model class for table "menu_items".
 *
 * The followings are the available columns in table 'menu_items':
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property string $icon
 * @property integer $lft
 * @property integer $rt
 * @property string $meta_description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $seo_text
 * @property integer $published
 * @property integer $group_id
 * @property integer $type
 * @property integer $level
 * @property integer $root
 * @property integer $header
 * @property string $path
 *
 * The followings are the available model relations:
 * @property MenuGroups $group
 * @property MenuItemsContent[] $menuItemsContents
 */
class MenuItems extends CActiveRecord
{
        const BANNERS_MENU_ITEM_TYPE = 0;
        const PRODUCT_MENU_ITEM_TYPE = 1;
        const CONTACT_MENU_ITEM_TYPE = 2;
        const STATIC_MENU_ITEM_TYPE = 3;
        const NEWS_MENU_ITEM_TYPE = 4;
        const LINK_MENU_ITEM_TYPE = 5;
        const MIGHTINESS_MENU_ITEM_TYPE = 6;
        const TEHCIKL_MENU_ITEM_TYPE = 7;
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuItems the static model class
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
		return 'menu_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lft, rt, published, group_id, level, root', 'numerical', 'integerOnly'=>true),
			array('type', 'numerical', 'integerOnly'=>true, 'message'=>'Тип должен быть выбран'),
			array('group_id, alias, name', 'required'),
			array('name, alias, icon, meta_description, meta_title, meta_keywords, seo_text, header, path', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, alias, icon, lft, rt, meta_description, meta_title, meta_keywords, seo_text, published, group_id, type, level, root, header, path', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'MenuGroups', 'group_id'),
			'menuItemsContents' => array(self::HAS_MANY, 'MenuItemsContent', 'item_id'),
                        //связь с таблицей products (нужна для акционной страницы)
                        'products'=>array(self::HAS_MANY,'Products',array('page_id'=>'id'),'through'=>'menuItemsContents'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя',
			'alias' => 'Ссылка',
			'icon' => 'Изображение',
			'lft' => 'Lft',
			'rt' => 'Rt',
			'meta_description' => 'Meta Description',
			'meta_title' => 'Meta Title',
			'meta_keywords' => 'Meta Keywords',
			'seo_text' => 'Seo текст',
			'published' => 'Опубликована',
			'group_id' => 'Группа',
			'type' => 'Тип',
			'level' => 'Level',
			'root' => 'Root',
			'header' => 'Заголовок',
			'path' => 'Путь',
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
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('lft',$this->lft);
		$criteria->compare('rt',$this->rt);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('seo_text',$this->seo_text,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('level',$this->level);
		$criteria->compare('root',$this->root);
		$criteria->compare('header',$this->header);
		$criteria->compare('path',$this->path);

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
        
        protected function afterSave(){
            parent::afterSave();
            if($this->path != CategoryUrlRule::getUrl($this->id, true)){
                $model = self::model()->findByPk($this->id);
                $model->path=CategoryUrlRule::getUrl($model->id, true);
                $model->saveNode(false);
                $childrens=$model->children()->findAll();
                foreach($childrens as $children){
                    $children->saveNode(false);
                }        
            }
            return true;
        }
        
        /*
         * Метод для создания дерева меню.
         */
        static function getMenuTree($eval = 'getMenuManageRow', $sql = false){
            if(!$sql){
                $sql = 'SELECT id,level,name,published FROM menu_items ORDER BY lft';
            }
            $categories = Yii::app()->db->createCommand($sql)->queryAll();
            return(self::toHierarchy($categories, $eval));
        }
        
        static function getMenuTreeWithCheckbox( $checkBoxNameAttr='MenuItem', $checkStatus = null, $activeItemType=array() ){
            $categories = Yii::app()->db->createCommand('SELECT id,level,name,published,type FROM menu_items ORDER BY lft')->queryAll();
            return(self::toHierarchy($categories, 'getMenuRowWithCheckBox', $checkBoxNameAttr, $checkStatus, $activeItemType));
        }
        
        private static function getMenuRowClear($item, $checkBoxNameAttr, $checkStatus, $activeItemType){
            $rowHtml=$item[name];
            return $rowHtml;
        }
        
        private static function getMenuRowWithCheckBox($item, $checkBoxNameAttr, $checkStatus, $activeItemType){
            $rowHtml=$item[name].CHtml::checkBox( 
                $checkBoxNameAttr."[$item[id]]",
                $checkStatus( $item[id] ),
                array('class'=>'menuItemCheckBox', in_array( $item[type], $activeItemType )?'':'disabled'=>'disabled')
            );
            return $rowHtml;
        }
        
         private static function getMenuManageRow($item){
            $item[level] == 1? $linkUrl = '/administrator/menu/updateMenu':$linkUrl = '/administrator/menu/updateMenuItem';
            $rowHtml = CHtml::link( 
                (mb_strlen($item[name], 'UTF-8')>20)?mb_substr($item[name],0,20, 'UTF-8')."...":$item[name], 
                $linkUrl.'/id/'.$item[id].'/ajax/true', 
                array ( 'class'=>'menuTreeViewLink', 
                        'onclick'=>'menuTreeView.showForm(this); return false;',
                        'title'=>$item[name],
                )
            ).CHtml::link( 
                '<img src="/images/deleteIcon.png" style="height:16px; float: right;">', 
                '/administrator/menu/deleteMenuItem/id/'.$item[id].'/ajax/true', 
                array ( 
                    'class'=>'menuTreeViewLink', 
                    'onclick'=>'if(confirm("Внимание! Пункт меню будет удален вместе со всеми дочерними пунктами. Продолжить?")){menuTreeView.deleteItem(this); return false;}else{return false;}',
                    'title'=>'Удалить пункт меню',
                )
            ).CHtml::link( 
                '<img src="/images/arrowUpIcon.png" style="height:16px; float: right;">', 
                '/administrator/menu/sortItemUp/id/'.$item[id].'/ajax/true', 
                array ( 
                    'class'=>'menuTreeViewLink',
                    'onclick'=>'menuTreeView.sortItem( this ); return false;',
                    'title'=>'Вверх',
                )
            ).CHtml::link( 
                '<img src="/images/arrowDownIcon.png" style="height:16px; float: right;">', 
                '/administrator/menu/sortItemDown/id/'.$item[id].'/ajax/true', 
                array ( 
                    'class'=>'menuTreeViewLink',
                    'onclick'=>'menuTreeView.sortItem( this ); return false;',
                    'title'=>'Вниз',
                )
            ).CHtml::link( 
                ($item[published] == 1)?'<img src="/images/publishedIcon.png" style="height:16px; float: right;">':'<img src="/images/unpublishedIcon.png" style="height:16px; float: right;">', 
                '/administrator/menu/changePublishing/id/'.$item[id].'/ajax/true', 
                array ( 
                    'class'=>'menuTreeViewLink',
                    'onclick'=>'menuTreeView.changePublishing( this ); return false;',
                    'title'=>($item[published] == 1)?'Опубликована. Снять с публикации.':'Не опубликована. Опубликовать.',
                )
            );
            return $rowHtml;
        }
        
        private static function getMenuManageRowForAkcii($item){
            $item_rec = MenuItems::model()->find('id = :id', array(':id'=>$item[id]));
            if($item[level]==3){
                $number_item=$item[id]+1;
                $rowHtml = CHtml::link( 
                (mb_strlen($item[name], 'UTF-8')>40)?mb_substr($item[name],0,40, 'UTF-8')."...":$item[name], 
                '/administrator/akcii/editGroup/id/'.$number_item.'/ajax/true', 
                array ( 'class'=>'menuTreeViewLink', 
                        'onclick'=>'menuTreeView.showForm(this); return false;',
                        'title'=>$item[name],
                    )
                );
            }
            else if ($item_rec->isLeaf()) {
                $rowHtml = CHtml::link( 
                (mb_strlen($item[name], 'UTF-8')>40)?mb_substr($item[name],0,40, 'UTF-8')."...":$item[name], 
                '/administrator/akcii/editProduct/id/'.$item[id].'/ajax/true', 
                array ( 'class'=>'menuTreeViewLink', 
                        'onclick'=>'menuTreeView.showForm(this); return false;',
                        'title'=>$item[name],
                    )
                );
            }
            else{
            $rowHtml = CHtml::label( 
                (mb_strlen($item[name], 'UTF-8')>40)?mb_substr($item[name],0,40, 'UTF-8')."...":$item[name],false);
            }
            return $rowHtml;
        }
        
        private static function toHierarchy($collection, $rowBuildFunction, $checkBoxNameAttr=null, $checkStatus=null, $activeItemType=null)
        {
            // Trees mapped
            $trees = array();
            $l = 0;

            if (count($collection) > 0) {
                // Node Stack. Used to help building the hierarchy
                $stack = array();
                foreach ($collection as $node) {
                    $item = $node;
                    $item['expanded'] = ( isset($_REQUEST['OpenItems'] ) && in_array( $node[id], $_REQUEST['OpenItems'] ) )?true:false;
//                    var_dump('$item[text]=self::'.$rowBuildFunction.'($item, $checkBoxNameAttr, $checkStatus, $activeItemType);');
//                    exit();
                    eval('$item[text]=self::'.$rowBuildFunction.'($item, $checkBoxNameAttr, $checkStatus, $activeItemType);');
                    $item['children'] = array();
                    
                    // Number of stack items
                    $l = count($stack);

                    // Check if we're dealing with different levels
                    while($l > 0 && $stack[$l - 1]['level'] >= $item['level']) {
                            array_pop($stack);
                            $l--;
                    }

                    // Stack is empty (we are inspecting the root)
                    if ($l == 0) {
                            // Assigning the root node
                            $i = count($trees);
                            $trees[$i] = $item;
                            $stack[] = & $trees[$i];
                    } else {
                            // Add node to parent
                            $i = count($stack[$l - 1]['children']);
                            $stack[$l - 1]['children'][$i] = $item;
                            $stack[] = & $stack[$l - 1]['children'][$i];
                    }
                }
            }

            return $trees;
        }
        
        public function getItemContent(){
            $criteria = new CDbCriteria();
            $criteria->condition = 'item_id=:item_id';
            $criteria->params = array(
                ':item_id'=>$this->id,
            );
            $dataProvider = new CActiveDataProvider('MenuItemsContent', array(
                'criteria'=>$criteria,
                'pagination'=>false
            ));
            if( $this->type == self::BANNERS_MENU_ITEM_TYPE ){
                $gridId = rand();
                Yii::app()->getController()->widget('zii.widgets.grid.CGridView', array(
                    'dataProvider'=>$dataProvider,
                    'ajaxUrl'=>Yii::app()->request->requestUri,
                    'summaryText'=>false,
                    'id'=>'menu_item_content_table',
                    'htmlOptions'=>array(
                        'style'=>'margin-right:15px;',
                    ),
                    'columns'=>array(
                        array(
                            'header'=>'Имя', 
                            'value'=>'Banners::model()->findByPk($data->page_id)->bannerRegions[0]->name',
                        ),
                        array(
                            'class'=>'CButtonColumn',
                            'template'=>'{up}{down}{update}',
                            'buttons'=>array(
                                'update'=>array(
                                    'url'=>'"/administrator/banners/update/id/".$data->page_id',
                                    'click'=>'function(e){
                                            if(e.isDefaultPrevented()) return;
                                            alertify.set({ labels: {
                                            ok     : "Да",
                                            cancel : "Нет"
                                        }});
                                        var href = this.href;
                                        alertify.confirm("Перейти на страницу редактирования баннера?", function (e) {
                                                if (e) {
                                                        window.open(href, "_blank");
                                                } else {
                                                        return false;
                                                }
                                        });
                                        return false;
                                    }',
                                ),
                                'up'=>array(
                                    'url'=>'"/administrator/banners/sortUp/bannerId/".$data->page_id."/menuItemId/".$data->item_id',
                                    'imageUrl'=>'/images/arrowUpIcon.png',
                                    'options'=>array('id'=>'up_banner_on_page'),
                                    'visible'=>'$row!=0',
                                    'click'=>'function(e){
                                        if(e.isDefaultPrevented()) return;
                                        var href = this.href;
                                        $.ajax({
                                            type:"POST",
                                            url:href,
                                        }).done(function(data){
                                            console.log(data);
                                            $.fn.yiiGridView.update("menu_item_content_table" ,{
                                                    complete: function(jqXHR, status) {
                                                        alertify.success("Порядок отображения баннера изменен");
                                                    }
                                                }
                                            );
                                        })
                                        
                                        return false;
                                    }',
                                ),
                                'down'=>array(
                                    'url'=>'"/administrator/banners/sortDown/bannerId/".$data->page_id."/menuItemId/".$data->item_id',
                                    'imageUrl'=>'/images/arrowDownIcon.png',
                                    'options'=>array('id'=>"down_banner_on_page"),
                                    'visible'=>'($row+1) != $this->grid->dataProvider->itemCount',
                                    'click'=>'function(e){
                                        if(e.isDefaultPrevented()) return;
                                        var href = this.href;
                                        $.ajax({
                                            type:"POST",
                                            url:href,
                                        }).done(function(data){
                                            console.log(data);
                                            $.fn.yiiGridView.update("menu_item_content_table" ,{
                                                    complete: function(jqXHR, status) {
                                                        alertify.success("Порядок отображения баннера изменен");
                                                    }
                                                }
                                            );
                                        })
                                        
                                        return false;
                                    }',
                                ),
                            ),
                        ),
                    ),
                ));
            }
            else{
                $gridId = rand();
                switch($this->type){
                    case self::CONTACT_MENU_ITEM_TYPE:
                        $modelName = 'Contacts';
                        $columnName = 'name';
                        break;
                    case self::PRODUCT_MENU_ITEM_TYPE:
                        $modelName = 'Products';
                        $columnName = 'name';
                        break;
                    case self::NEWS_MENU_ITEM_TYPE:
                        $modelName = 'News';
                        $columnName = 'header';
                        break;
                    case self::STATIC_MENU_ITEM_TYPE:
                        $modelName = 'Pages';
                        $columnName = 'name';
                        break;
                }
                Yii::app()->getController()->widget('zii.widgets.grid.CGridView', array(
                    'dataProvider'=>$dataProvider,
                    'ajaxUrl'=>Yii::app()->request->requestUri,
                    'summaryText'=>false,
                    'id'=>'menu_item_content_table',
                    'htmlOptions'=>array(
                        'style'=>'margin-right:15px;',
                    ),
                    'columns'=>array(
                        array(
                            'header'=>'Имя', 
                            'value'=>$modelName.'::model()->findByPk($data->page_id)->'.$columnName,
                        ),
                        array(
                            'class'=>'CButtonColumn',
                            'template'=>'{update}',
                            'buttons'=>array(
                                'update'=>array(
                                    'url'=>'"/administrator/'.$modelName.'/update/id/".$data->page_id',
                                    'click'=>'function(e){
                                            if(e.isDefaultPrevented()) return;
                                            alertify.set({ labels: {
                                            ok     : "Да",
                                            cancel : "Нет"
                                        }});
                                        var href = this.href;
                                        alertify.confirm("Перейти на страницу редактирования записи?", function (e) {
                                                if (e) {
                                                        window.location = href;
                                                } else {
                                                        return false;
                                                }
                                        });
                                        return false;
                                    }',
                                ),
                            ),
                        ),
                    ),
                ));
            }
        }
        
        //Метод возвращает все типы пунктов меню в виде массива, где:
        //ключ - id типа, а значение - имя типа
        static function getMenuItemsType(){
            $types = array();
            $types[MenuItems::BANNERS_MENU_ITEM_TYPE] = 'Страница с баннерами';
            $types[MenuItems::PRODUCT_MENU_ITEM_TYPE] = 'Страница товара';
            $types[MenuItems::CONTACT_MENU_ITEM_TYPE] = 'Страница контакта';
            $types[MenuItems::STATIC_MENU_ITEM_TYPE] = 'Статическая страница';
            $types[MenuItems::NEWS_MENU_ITEM_TYPE] = 'Страница новости';
            $types[MenuItems::LINK_MENU_ITEM_TYPE] = 'Внешняя ссылка';
            $types[MenuItems::MIGHTINESS_MENU_ITEM_TYPE] = 'Мощность трактора';
            $types[MenuItems::TEHCIKL_MENU_ITEM_TYPE] = 'Технологический цикл';
            return $types;
        }
        
        static function getItemIdByPath($path){
            if( $path === ''){
                $desiredMenuItem = MenuItems::model()->find('level=1');
            }
            else{
                $path = trim($path, '\/');
                //Разбиваем запрос на массив по символу "/"
                $queryPathArray = explode('/', 'index/'.$path );
                //"переворачиваем" его для обхода начиная с последнего елемента
                $queryPathArrayReversed = array_reverse( $queryPathArray );
                foreach( $queryPathArrayReversed as $i=>$partOfPath ){
                    //находим модели всех пунктов меню в которых поле alias равен части пути
                    $menuItemsModel = MenuItems::model()->findAll(
                        'lower(alias)=:alias AND published=1',
                        array(
                            ':alias'=>mb_strtolower($partOfPath),
                        )
                    );
                    //Если не найдено ни одной записи
                    if( empty($menuItemsModel) ){
                        return false; // нет такого пункта меню
                    }

                    foreach( $menuItemsModel as $menuItemModelNum => $menuItemModel ){
                        //Предки пункта меню
                        $ancestors = $menuItemModel->ancestors()->findAll();
                        //если первый предок является корневым пунктом меню
                        //и количество предков (+ текущий узел) в базе данных совпадает с количесвом уровней в url
                        if( $ancestors[0]->level == '1' && (count($ancestors)+1)==count($queryPathArray) ){
                            //проверяем соответствие частей пути полям alias соответствующих предков
                            foreach($ancestors as $ancestorNum => $ancestor){
                                if(mb_strtolower($ancestor->alias) !== mb_strtolower($queryPathArray[$ancestorNum])){
                                    continue(2);
                                }
                            }
                            $desiredMenuItem = $menuItemModel;
                            break;
                        }
                        else{
                            continue;
                        }
                    }
                    if($desiredMenuItem !== null){
                        break;
                    }
                }
            }
            //Если не найден искомый пункт меню
            if($desiredMenuItem === null){
                return false; // нет такого пункта меню
            }

            return $desiredMenuItem->id;
        }
        
}