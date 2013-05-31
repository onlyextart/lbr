<?php

class m130527_085201_add_user_group_eq extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                //$this->dropTable('user_group_eq');
                $this->dropTable('operation_role_eq');
                $this->dropTable('role_user_group_eq');
                $this->dropTable('users');
                $this->dropTable('user_groups');
                $this->dropTable('roles');
                $this->dropTable('operations');
                
                $this->createTable('operations', array(
                    'id' => 'pk',
                    'name' => 'text',
                    'description' => 'text',
                ));
                
                $this->createTable('roles',array(
                    'id' => 'pk',
                    'name' => 'text',
                    'description' => 'text'
                ));
                
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
                    'email' => 'text'
                ));
                
                $this->createTable('operation_role_eq', array(
                    'id' => 'pk',
                    'operation_id'=>'INTEGER CONSTRAINT [operation_id] REFERENCES [operations]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'role_id'=>'INTEGER CONSTRAINT [role_id] REFERENCES [roles]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                ));
                
                $this->createTable('role_user_group_eq', array(
                    'id' => 'pk',
                    'role_id'=>'INTEGER CONSTRAINT [role_id] REFERENCES [roles]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'user_group_id'=>'INTEGER CONSTRAINT [user_group_id] REFERENCES [user_groups]([id]) ON DELETE CASCADE ON UPDATE CASCADE'
                ));
                
                $this->createTable('user_group_eq', array(
                    'id' => 'pk',
                    'user_id'=>'INTEGER CONSTRAINT [user_id] REFERENCES [users]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'group_id'=>'INTEGER CONSTRAINT [group_id] REFERENCES [user_groups]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
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
		echo "m130527_085201_add_user_group_eq does not support migration down.\n";
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