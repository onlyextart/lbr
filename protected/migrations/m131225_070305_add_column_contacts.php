<?php

class m131225_070305_add_column_contacts extends CDbMigration
{
	public function up()
	{
	   $this->addColumn('contacts', 'okrug_id', 'integer');
	}

	public function down()
	{
		echo "m131225_070305_add_column_contacts does not support migration down.\n";
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