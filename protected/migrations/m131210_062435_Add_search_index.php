<?php

class m131210_062435_Add_search_index extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('search_index',array(
                    'id' => 'pk',
                    'menu_item_id' => 'INTEGER CONSTRAINT [menu_item_id] REFERENCES [menu_items]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'header'=>'TEXT',
                    'keywords'=>'TEXT',
                    'description'=>'TEXT',
                    'content'=>'TEXT',
                    'type' => 'INTEGER'
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
		echo "m131210_062435_Add_search_index does not support migration down.\n";
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