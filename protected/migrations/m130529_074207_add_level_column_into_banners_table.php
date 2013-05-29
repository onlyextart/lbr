<?php

class m130529_074207_add_level_column_into_banners_table extends CDbMigration
{
	public function up()
	{
            $this->dropTable('banners');
            $this->createTable('banners', array(
                    'id'=>'pk',
                    'lft'=>'int',
                    'rt'=>'int',
                    'icon'=>'text',
                    'type'=>'int',
                    'published'=>'boolean',
                    'level'=>'int',
                    'root' => 'int',
                )
            );
	}

	public function down()
	{
		echo "m130529_074207_add_level_column_into_banners_table does not support migration down.\n";
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