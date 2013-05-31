<?php

class m130530_104725_add_group_roles_eq extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
            
                $this->dropTable('AuthItemChild');
                $this->dropTable('AuthAssignment');
                $this->dropTable('users');
                $this->dropTable('user_groups');
                $this->dropTable('AuthItem');
                
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
                    create table \'AuthItemChild\'
                    (
                       "parent"               varchar(64) not null,
                       "child"                varchar(64) not null,
                       primary key ("parent","child"),
                       foreign key ("parent") references \'AuthItem\' ("name") on delete cascade on update cascade,
                       foreign key ("child") references \'AuthItem\' ("name") on delete cascade on update cascade
                    );
                ');
                $this->execute('
                    create table \'AuthAssignment\'
                    (
                       "itemname"             varchar(64) not null,
                       "userid"               varchar(64) not null,
                       "bizrule"              text,
                       "data"                 text,
                       primary key ("itemname","userid"),
                       foreign key ("userid") references \'user_groups\' ("id") on delete cascade on update cascade,
                       foreign key ("itemname") references \'AuthItem\' ("name") on delete cascade on update cascade
                    );
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
		echo "m130530_104725_add_group_roles_eq does not support migration down.\n";
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