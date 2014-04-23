<?php

class m140421_085609_add_new_collum_to_KP extends CDbMigration
{
	public function up()
	{
            $this->addColumn('kp', 'price_min', 'TEXT');
	}

	public function down()
	{
		echo "m140421_085609_add_new_collum_to_KP does not support migration down.\n";
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