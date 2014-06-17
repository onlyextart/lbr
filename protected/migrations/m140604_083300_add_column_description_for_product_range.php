<?php

class m140604_083300_add_column_description_for_product_range extends CDbMigration
{
	public function up()
	{
            
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->addColumn('product_range', 'description', 'TEXT');
                
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
		echo "m140604_083300_add_column_description_for_product_range does not support migration down.\n";
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