<?php

class m140127_094837_create_contact_image extends CDbMigration
{
	public function up()
	{
	   $this->createTable('contact_image', array(
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
		echo "m140127_094837_create_contact_image does not support migration down.\n";
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