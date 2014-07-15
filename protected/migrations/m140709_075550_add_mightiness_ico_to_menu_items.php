<?php

class m140709_075550_add_mightiness_ico_to_menu_items extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->addColumn('menu_items', 'mightiness_ico', 'TEXT');
                $this->addColumn('tech_schema', 'menu_img', 'TEXT');
                $this->addColumn('tech_schema', 'color', 'TEXT');
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
		echo "m140709_075550_add_mightiness_ico_to_menu_items does not support migration down.\n";
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