<?php

class m150703_090745_del_tbl extends CDbMigration
{
	public function up()
	{
            $this->dropTable('lbrsession');
	}

	public function down()
	{
		
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