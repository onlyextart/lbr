<?php

/**
 * This is the model class for table "menu_groups".
 *
 * The followings are the available columns in table 'menu_groups':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $color
 *
 * The followings are the available model relations:
 * @property MenuItems[] $menuItems
 */
class MenuGroups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuGroups the static model class
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
		return 'menu_groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, color', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, color', 'safe', 'on'=>'search'),
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
			'menuItems' => array(self::HAS_MANY, 'MenuItems', 'group_id'),
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
			'description' => 'Описание',
			'color' => 'Цвет',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('color',$this->color,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //Метод возвращает все группы в виде массива, где:
        // ключ - id группы, а значение - имя группы
        static function getGroupsArray(){
                $groups = MenuGroups::model()->findAll();
                $groupsArray = array();
                foreach( $groups as $group ){
                    $groupsArray[$group->id] = $group->name;
                }
                return $groupsArray;
        }
        public function afterSave() {
            parent::afterSave();
            $allGroupsModel = MenuGroups::model()->findAll();
            $cssStr = '';
            foreach($allGroupsModel as $groupModel){
               $cssStr .='.menu_color_group_'.$groupModel->id.'{
    background-color:#'.$groupModel->color.';
    border-color:#'.$groupModel->color.';
    color:#'.$groupModel->color.';
}
@menu_color_group_'.$groupModel->id.':#'.$groupModel->color.';

.main_menu_wrapper{
    .main_menu_second_level{
        li.menu_color_group_'.$groupModel->id.'{
            a:after{
                background:#'.$groupModel->color.';
            }    
        }
    }
}    
'; 
            }
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/css/menuGroups.less', $cssStr);
            return true;
        }
}