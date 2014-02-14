<?php
 /* @property integer $id
 * @property integer $name
 * @property string $alias
 * @property boolean $published
 * @property string $domain
 * @property string $address
 * @property string $telephone
 * @property string $work_time
 * @property string $email
 * @property string $map_code
 * @property string $message_email
 * @property string $info
 * @property string $images
 */
class m130529_064006_contacts_name_alter_colums extends CDbMigration
{
	public function up()
	{
            $this->dropTable('contacts');
            $this->createTable('contacts', array(
                    'id'=>'pk',
                    'name'=>'text',
                    'alias'=>'text',
                    'published'=>'boolean',
                    'domain'=>'text',
                    'address'=>'text',
                    'telephone'=>'text',
                    'work_time'=>'text',
                    'email'=>'text',
                    'map_code'=>'text',
                    'message_email'=>'text',
                    'info'=>'text',
                    'images'=>'text'
                )
            );
	}

	public function down()
	{
		echo "m130529_064006_contacts_name_alter_colums does not support migration down.\n";
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