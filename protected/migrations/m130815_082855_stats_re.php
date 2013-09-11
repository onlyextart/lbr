<?php

class m130815_082855_stats_re extends CDbMigration
{
	public function up()
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

	public function down()
	{
		echo "m130815_082855_stats_re does not support migration down.\n";
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