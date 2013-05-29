<?php

class m130524_060028_add_levels_into_MenuItems_table extends CDbMigration
{
	public function up()
	{
                $this->addColumn('menu_items', 'level', 'int(2)');
	}

	public function down()
	{
		echo "m130524_060028_add_levels_into_MenuItems_table does not support migration down.\n";
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