<?php

class m140404_084604_add_login_to_old_kp extends CDbMigration
{
	public function up()
	{
            $this->addColumn('kp', 'login', 'TEXT');
	}

	public function down()
	{
		echo "m140404_084604_add_login_to_old_kp does not support migration down.\n";
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