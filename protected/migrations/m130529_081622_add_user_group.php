<?php

class m130529_081622_add_user_group extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
            
                $this->dropTable('users');
                
                $this->createTable('user_groups',array(
                    'id' => 'pk',
                    'name' => 'text',
                    'description' => 'text'
                ));
                $this->createTable('users',array(
                    'id' => 'pk',
                    'login' => 'text',
                    'password' => 'text',
                    'name' => 'text',
                    'surname' => 'text',
                    'email' => 'text',
                    'group_id'=>'INTEGER CONSTRAINT [group_id] REFERENCES [user_groups]([id]) ON DELETE NO ACTION ON UPDATE CASCADE'
                ));
                $transaction->commit();
            }
            catch(Exception $e)
            {
                echo "Exception: ".$e->getMessage()."\n";
                $transaction->rollback();
                return false;
            }
	}

	public function down()
	{
		echo "m130529_081622_add_user_group does not support migration down.\n";
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