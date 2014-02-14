<?php

class m140127_092311_drop_table_tbl_news extends CDbMigration
{
	public function up()
	{
	   $this->droptable('tbl_news');
	}

	public function down()
	{
		echo "m140127_092311_drop_table_tbl_news does not support migration down.\n";
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