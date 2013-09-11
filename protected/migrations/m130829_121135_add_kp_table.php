<?php

class m130829_121135_add_kp_table extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                
                $this->createTable('kp',array(
                    'id' => 'pk',
                    'user' => 'TEXT',
                    'temp_id' => 'TEXT',
                    'price' => 'TEXT',
                    'client' => 'TEXT',
                    'header' => 'TEXT',
                    'filial' => 'TEXT',
                    'filial_bottom' => 'TEXT',
                    'control_number' => 'int'
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
		echo "m130829_121135_add_kp_table does not support migration down.\n";
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