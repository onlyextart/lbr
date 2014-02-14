<?php

class m130610_065811_pages_db_refactoring extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('pages');
                $this->dropTable('pages_region');
                
                $this->createTable('pages',array(
                    'id' => 'pk',
                    'name' => 'text',
                    'published' => 'text',
                    'data' => 'timestamp',
                ));
                
                $this->createTable('pages_region', array(
                    'id' => 'pk',
                    'filial_id'=>'INTEGER CONSTRAINT [filial_id] REFERENCES [contacts]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'page_id'=>'INTEGER CONSTRAINT [page_id] REFERENCES [pages]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'content'=>'text',
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
		echo "m130610_065811_pages_db_refactoring does not support migration down.\n";
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