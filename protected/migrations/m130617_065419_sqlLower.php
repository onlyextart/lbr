<?php

class m130617_065419_sqlLower extends CDbMigration
{
	public function up()
	{
            function lower($str)
            {
                return mb_strtolower($str, "UTF-8");
            }

            Yii::app()->db->getPdoInstance()->sqliteCreateFunction ('lower', 'lower', 1);
	}

	public function down()
	{
		echo "m130617_065419_sqlLower does not support migration down.\n";
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