<?php

class m130814_074724_statistics_of_visits extends CDbMigration
{
	public function up()
	{
	}

	public function down()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                
                $this->createTable('sells_stats',array(
                    'id' => 'pk',
                    'user_id' => 'INTEGER CONSTRAINT [user_id] REFERENCES [users]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'page_id' => 'INTEGER CONSTRAINT [page_id] REFERENCES [menu_items_content]([page_id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'time' => 'timestamp',
                    'session' => 'text',
                    'video' => 'boolean'
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