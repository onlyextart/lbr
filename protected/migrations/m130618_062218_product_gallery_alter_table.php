<?php

class m130618_062218_product_gallery_alter_table extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('product_gallery');
                $this->createTable('product_gallery', array(
                    'id' => 'pk ',
                    'path' => 'text',
                    'description' => 'text',
                    'alt' => 'text',
                    'title' => 'text',
                    'product_id' => 'INTEGER CONSTRAINT [product_id] REFERENCES [products]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'sorting' => 'int',
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
		echo "m130618_062218_product_gallery_alter_table does not support migration down.\n";
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