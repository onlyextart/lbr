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
 * @property integer $menu_id
 * @property boolean $published
 * @property integer $group_id
 * @property integer $type
 * @property integer $level
 * @property integer $root
 *
 * The followings are the available model relations:
 * @property MenuGroups $group
 * @property Menu $menu
 * @property MenuItemsContent[] $menuItemsContents
 */
class m130524_094924_drop_menu_table extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('menu_items');
                $this->dropTable('menu');
                $this->createTable('menu_items', array(
                    'id' => 'pk ',
                    'name' => 'text',
                    'alias' => 'text',
                    'icon' => 'text',
                    'lft' => 'int',
                    'rt' => 'int',
                    'meta_description' => 'text', 
                    'meta_title' => 'text',
                    'meta_keywords' => 'text',
                    'seo_text' => 'text',
                    'published' => 'int',
                    'group_id' => 'INTEGER CONSTRAINT [group_id] REFERENCES [menu_groups]([id]) ON DELETE NO ACTION ON UPDATE CASCADE',
                    'type' => 'int',
                    'level' => 'int',
                    'root' => 'int',
                ));
                //$this->addForeignKey('group_id', 'menu_items', 'group_id', 'menu_groups', 'id');
                $transaction->commit();
            }
            catch(Exception $e)
            {
                echo "Exception: ".$e->getMessage()."\n";
                $transaction->rollback();
                return false;
            }
	}

	public function down()
	{
		echo "m130524_094924_drop_menu_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}