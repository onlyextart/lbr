<?php

class m140127_091008_create extends CDbMigration
{
	public function up()
	{
	   $this->createTable('contactsImage', array(
      'id' => 'pk NOT NULL',
      'path' => 'text',
      'description' => 'text',
      'alt' => 'text',
      'title' => 'text',
      'contact_id' => 'INTEGER',
      'sorting' => 'int',
      ));
	}

	public function down()
	{
		echo "m140127_091008_create does not support migration down.\n";
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