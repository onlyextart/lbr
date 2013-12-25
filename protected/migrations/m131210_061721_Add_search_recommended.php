<?php

class m131210_061721_Add_search_recommended extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('search_recommended',array(
                    'id' => 'pk',
                    'menu_item_id' => 'INTEGER CONSTRAINT [menu_item_id] REFERENCES [menu_items]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'sorted' => 'int',
                    'text' => 'TEXT'
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
		echo "m131210_061721_Add_search_recommended does not support migration down.\n";
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