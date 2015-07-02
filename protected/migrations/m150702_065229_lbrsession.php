<?php

class m150702_065229_lbrsession extends CDbMigration
{
	public function up()
	{
            $this->createTable('lbrsession', array(
                    'id' => 'pk',
                    'expire' => 'integer',
                    'data' => 'text',
                ));

	}

	public function down()
	{
		echo "m150702_065229_lbrsession does not support migration down.\n";
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