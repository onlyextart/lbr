<?php

class m140120_081124_add_column_contacts extends CDbMigration
{
	public function up()
	{
	   $this->addColumn('contacts', 'servis_regions', 'text');
	}

	public function down()
	{
		echo "m140120_081124_add_column_contacts does not support migration down.\n";
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