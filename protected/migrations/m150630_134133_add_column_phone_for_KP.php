<?php

class m150630_134133_add_column_phone_for_KP extends CDbMigration
{
	public function up()
	{
            $this->addColumn('contacts', 'phonekp', 'text');
	}

	public function down()
	{
		echo "m150630_134133_add_column_phone_for_KP does not support migration down.\n";
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