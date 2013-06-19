<?php

class m130618_131841_delete_type_column_from_menuItemsContent_table extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('menu_items_content');
                $this->createTable('menu_items_content', array(
                    'id' => 'pk ',
                    'item_id' => 'INTEGER CONSTRAINT [item_id] REFERENCES [menu_items]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'page_id' => 'int',
                    'sorting' => 'int',
                ));
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
		echo "m130618_131841_delete_type_column_from_menuItemsContent_table does not support migration down.\n";
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