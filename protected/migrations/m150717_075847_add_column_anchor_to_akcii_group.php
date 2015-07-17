<?php

class m150717_075847_add_column_anchor_to_akcii_group extends CDbMigration
{
	public function up()
	{
            $this->addColumn('akcii_group', 'anchor', 'text');
	}

	public function down()
	{
		echo "m150717_075847_add_column_anchor_to_akcii_group does not support migration down.\n";
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