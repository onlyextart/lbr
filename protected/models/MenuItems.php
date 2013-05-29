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
			array('lft, rt, published, group_id, type, level, root', 'numerical', 'integerOnly'=>true),
			array('group_id, alias, name', 'required'),
			array('name, alias, icon, meta_description, meta_title, meta_keywords, seo_text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, alias, icon, lft, rt, meta_description, meta_title, meta_keywords, seo_text, published, group_id, type, level, root', 'safe', 'on'=>'search'),
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
        
        /*Метод для создания дерева меню. Принимает массив соделей корневых узлов.
         */
        
        static function getMenuTree( $roots ){
            $levelArray = array();
            foreach( $roots as $i=>$menuItem ){
                $newItemArray = array();
                $newItemArray['id'] = $menuItem->id;
                $menuItem->level == 1? $linkUrl = 'administrator/menu/updateMenu':$linkUrl = 'administrator/menu/updateMenuItem';
                $newItemArray['text'] = CHtml::link( 
                    $menuItem->name, 
                    $linkUrl.'/id/'.$menuItem->id.'/ajax/true', 
                    array ( 'class'=>'menuTreeViewLink', 
                            'onclick'=>'menuTreeView.showForm(this); return false;' )
                ).CHtml::link( 
                    '<img src="/images/deleteIcon.png" style="height:16px; float: right;">', 
                    'administrator/menu/deleteMenuItem/id/'.$menuItem->id.'/ajax/true', 
                    array ( 
                        'class'=>'menuTreeViewLink', 
                        'onclick'=>'if(confirm("Внимание! Пункт меню будет удален вместе со всеми дочерними пунктами. Продолжить?")){menuTreeView.deleteItem(this); return false;}else{return false;}',
                        'title'=>'Удалить пункт меню',
                    )
                ).CHtml::link( 
                    '<img src="/images/arrowUpIcon.png" style="height:16px; float: right;">', 
                    'administrator/menu/sortItemUp/id/'.$menuItem->id.'/ajax/true', 
                    array ( 
                        'class'=>'menuTreeViewLink',
                        'onclick'=>'menuTreeView.sortItem( this ); return false;',
                        'title'=>'Вверх',
                    )
                ).CHtml::link( 
                    '<img src="/images/arrowDownIcon.png" style="height:16px; float: right;">', 
                    'administrator/menu/sortItemDown/id/'.$menuItem->id.'/ajax/true', 
                    array ( 
                        'class'=>'menuTreeViewLink',
                        'onclick'=>'menuTreeView.sortItem( this ); return false;',
                        'title'=>'Вниз',
                    )
                ).CHtml::link( 
                    ($menuItem->published == 1)?'<img src="/images/publishedIcon.png" style="height:16px; float: right;">':'<img src="/images/unpublishedIcon.png" style="height:16px; float: right;">', 
                    'administrator/menu/changePublishing/id/'.$menuItem->id.'/ajax/true', 
                    array ( 
                        'class'=>'menuTreeViewLink',
                        'onclick'=>'menuTreeView.changePublishing( this ); return false;',
                        'title'=>($menuItem->published == 1)?'Опубликована. Снять с публикации.':'Не опубликована. Опубликовать.',
                    )
                );
                $newItemArray['expanded'] = ( isset($_REQUEST['OpenItems'] ) && in_array( $menuItem->id, $_REQUEST['OpenItems'] ) )?true:false;
                $menuChildrens = $menuItem->children()->findAll();
                if( count($menuChildrens) !== 0 ){
                    $newItemArray['children'] = self::getMenuTree( $menuChildrens );
                }
                $newItemArray['children'][] = array(
                    'id'=>'addMenuItem',
                    'text' => CHtml::link( 
                            '<img src="/images/addIcon.png" style="height:16px;">', 
                            'administrator/menu/createMenuItem/rootId/'.$menuItem->id.'/ajax/true', 
                            array ( 
                                'class'=>'menuTreeViewLink',
                                'onclick'=>'menuTreeView.showForm(this); return false;',
                                'title'=>'Создать новый пункт меню',
                            )
                        ),
                    'expanded' => false,
                );
                $levelArray[] = $newItemArray;
            }
            return $levelArray;
        }
        
        //Метод возвращает все типы пунктов меню в виде массива, где:
        // ключ - id типа, а значение - имя типа
        static function getMenuItemsType(){
            $types = array();
            $types[MenuItems::BANNERS_MENU_ITEM_TYPE] = 'Страница с баннерами';
            $types[MenuItems::PRODUCT_MENU_ITEM_TYPE] = 'Страница товара';
            $types[MenuItems::CONTACT_MENU_ITEM_TYPE] = 'Страница контакта';
            $types[MenuItems::STATIC_MENU_ITEM_TYPE] = 'Статическая страница';
            return $types;
        }
        
}