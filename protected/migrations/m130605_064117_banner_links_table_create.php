<?php

class m130605_064117_banner_links_table_create extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('banner_links', array(
                    'id' => 'pk ',
                    'banner_id' => 'INTEGER CONSTRAINT [banners] REFERENCES [banners]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'menu_item_id' => 'INTEGER CONSTRAINT [menu_items] REFERENCES [menu_items]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
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
		echo "m130605_064117_banner_links_table_create does not support migration down.\n";
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