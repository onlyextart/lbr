<?php

class m130531_103141_Change_Path_in_BannersImage_Table extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('banner_images');
                $this->createTable('banner_images', array(
                    'id' => 'pk ',
                    'path' => 'text',
                    'description' => 'text',
                    'region_id' => 'INTEGER CONSTRAINT [regions] REFERENCES [contacts]([id]) ON DELETE NO ACTION ON UPDATE CASCADE',
                    'alt' => 'text',
                    'title' => 'text',
                    'sorting' => 'int', 
                    'banner_id' => 'INTEGER CONSTRAINT [banners] REFERENCES [banners]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'type' => 'int',
                    'top_left' => 'text',
                    'top_right' => 'text',
                    'bottom_left' => 'text',
                    'bottom_right' => 'text',
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
		echo "m130531_103141_Change_Path_in_BannersImage_Table does not support migration down.\n";
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