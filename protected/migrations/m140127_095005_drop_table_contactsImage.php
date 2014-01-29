<?php

class m140127_095005_drop_table_contactsImage extends CDbMigration
{
	public function up()
	{
	   $this->droptable('contactsImage');
	}

	public function down()
	{
		echo "m140127_095005_drop_table_contactsImage does not support migration down.\n";
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