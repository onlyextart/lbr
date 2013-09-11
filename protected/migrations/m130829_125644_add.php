<?php

class m130829_125644_add extends CDbMigration
{
	public function up()
 {
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                
                $this->createTable('template_kp',array(
                    'id' => 'pk',
                    'title' => 'TEXT',
                    'big_image' => 'image',
                    'description' => 'TEXT',
                    'small_image' => 'image',
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

	
	public function Down()
    {
        $this->dropTable('template_kp');
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