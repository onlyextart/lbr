<?php

class m130524_065619_create_root_in_MenuItems_table extends CDbMigration
{
	public function up()
	{
            $this->addColumn('menu_items', 'root', 'int(10)');
	}

	public function down()
	{
		echo "m130524_065619_create_root_in_MenuItems_table does not support migration down.\n";
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