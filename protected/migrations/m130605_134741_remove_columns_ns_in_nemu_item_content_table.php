<?php

class m130605_134741_remove_columns_ns_in_nemu_item_content_table extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('menu_items_content');
                $this->createTable('menu_items_content', array(
                    'id' => 'pk ',
                    'item_id' => 'INTEGER CONSTRAINT [meun_items] REFERENCES [menu_items]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'page_id' => 'int',
                    'type' => 'int',
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
		echo "m130605_134741_remove_columns_ns_in_nemu_item_content_table does not support migration down.\n";
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