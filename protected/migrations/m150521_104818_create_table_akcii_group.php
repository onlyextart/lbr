<?php

class m150521_104818_create_table_akcii_group extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('akcii_group',array(
                    'id' => 'pk',
                    'item_id' => 'INTEGER CONSTRAINT [item_id] REFERENCES [menu_items]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'description' => 'text',
                    'published' => 'int',
                    'range' => 'int',
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
		echo "m150521_104818_create_table_akcii_group does not support migration down.\n";
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