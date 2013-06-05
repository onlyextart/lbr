<?php

class m130604_120741_alter_table_makers_in_banner extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->dropTable('makers_in_banner');
                $this->createTable('makers_in_banner', array(
                    'id' => 'pk ',
                    'banner_id' => 'INTEGER CONSTRAINT [banners] REFERENCES [banners]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'maker_id' => 'INTEGER CONSTRAINT [makers] REFERENCES [makers]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
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
		echo "m130604_120741_alter_table_makers_in_banner does not support migration down.\n";
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