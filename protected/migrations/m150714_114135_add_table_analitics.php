<?php

class m150714_114135_add_table_statistics extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('statistics', array(
                    'id' => 'pk',
                    'customer_id' => 'text',
                    'subscription_id' => 'text',
                    'time' => 'text',
                    'url' => 'text',
                    'date_created' => 'timestamp',
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
		echo "m150714_114135_add_table_statistics does not support migration down.\n";
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