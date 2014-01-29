<?php

class m140123_112702_add_collum_to_kp extends CDbMigration
{
	public function up()
	{
            $this->addColumn('kp', 'finance_block', 'varchar');
            $this->addColumn('kp', 'finance_block_text', 'text');
	}

	public function down()
	{
		echo "m140123_112702_add_collum_to_kp does not support migration down.\n";
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