<?php

class m130530_122210_revome_group_role_eq extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
            
                $this->dropTable('users');
                $this->dropTable('user_groups');
                $this->dropTable('AuthItem');
                $this->dropTable('AuthItemChild');
                $this->dropTable('AuthAssignment');
                
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
                $this->execute('
                    create table \'AuthItem\'
                    (
                       "name"                 varchar(64) not null,
                       "type"                 integer not null,
                       "description"          text,
                       "bizrule"              text,
                       "data"                 text,
                       primary key ("name")
                    );
                ');
                $this->execute('
                    CREATE TABLE [AuthItemChild] (
                        [parent] varchar(64) NOT NULL CONSTRAINT [parent] REFERENCES [AuthItem]([name]) ON DELETE cascade ON UPDATE cascade, 
                        [child] varchar(64) NOT NULL CONSTRAINT [child] REFERENCES [AuthItem]([name]) ON DELETE cascade ON UPDATE cascade, 
                        CONSTRAINT [sqlite_autoindex_AuthItemChild_1] PRIMARY KEY ([parent], [child]));
                ');
                $this->execute('
                    CREATE TABLE [AuthAssignment] (
                        [itemname] varchar(64) NOT NULL CONSTRAINT [itemname] REFERENCES [AuthItem]([name]) ON DELETE cascade ON UPDATE cascade, 
                        [userid] varchar(64) NOT NULL, 
                        [bizrule] text, 
                        [data] text, 
                        CONSTRAINT [sqlite_autoindex_AuthAssignment_1] PRIMARY KEY ([itemname], [userid]));
                ');
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
		echo "m130530_122210_revome_group_role_eq does not support migration down.\n";
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