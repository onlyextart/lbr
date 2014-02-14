<?php

class m130911_133727_rebase_kp extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('template_kp');
                $this->createTable('template_kp',array(
                    'id' => 'pk',
                    'title' => 'TEXT',
                    'big_image' => 'TEXT',
                    'description' => 'TEXT',
                    'small_image' => 'TEXT',
                    'type' => 'int'
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
		echo "m130911_133727_rebase_kp does not support migration down.\n";
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