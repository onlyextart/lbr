<?php

class m131013_185006_add_price_blue extends CDbMigration
{
	public function up()
	{
	   $this->addColumn('kp', 'price_blue', 'TEXT');
	}

	public function down()
	{
		echo "m131013_185006_add_price_blue does not support migration down.\n";
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