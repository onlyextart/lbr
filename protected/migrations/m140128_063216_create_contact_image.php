<?php

class m140128_063216_create_contact_image extends CDbMigration
{
	public function up()
	{
	   $this->dropTable('contact_image');
                $this->createTable('contact_image', array(
                    'id' => 'pk ',
                    'path' => 'text',
                    'description' => 'text',
                    'alt' => 'text',
                    'title' => 'text',
                    'contact_id' => 'INTEGER CONSTRAINT [contact_id] REFERENCES [contacts]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'sorting' => 'int',
                ));
	}

	public function down()
	{
		echo "m140128_063216_create_contact_image does not support migration down.\n";
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