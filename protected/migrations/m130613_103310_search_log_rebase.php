<?php

class m130613_103310_search_log_rebase extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('search_log');
                
                $this->createTable('search_log',array(
                    'id' => 'pk',
                    'query' => 'text',
                    'transition' => 'text',
                    'data' => 'timestamp',
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
		echo "m130613_103310_search_log_rebase does not support migration down.\n";
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