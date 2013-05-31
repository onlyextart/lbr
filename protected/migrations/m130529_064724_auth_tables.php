<?php

class m130529_064724_auth_tables extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
            
                $this->dropTable('users');
                $this->dropTable('user_groups');
                $this->dropTable('roles');
                $this->dropTable('operations');
                $this->dropTable('operation_role_eq');
                $this->dropTable('role_user_group_eq');
                $this->dropTable('user_group_eq');
                $this->createTable('users',array(
                    'id' => 'pk',
                    'login' => 'text',
                    'password' => 'text',
                    'name' => 'text',
                    'surname' => 'text',
                    'email' => 'text'
                ));
                $sql = "
create table 'AuthItem'
(
   \"name\"                 varchar(64) not null,
   \"type\"                 integer not null,
   \"description\"          text,
   \"bizrule\"              text,
   \"data\"                 text,
   primary key (\"name\")
);

create table 'AuthItemChild'
(
   \"parent\"               varchar(64) not null,
   \"child\"                varchar(64) not null,
   primary key (\"parent\",\"child\"),
   foreign key (\"parent\") references 'AuthItem' (\"name\") on delete cascade on update cascade,
   foreign key (\"child\") references 'AuthItem' (\"name\") on delete cascade on update cascade
);

create table 'AuthAssignment'
(
   \"itemname\"             varchar(64) not null,
   \"userid\"               varchar(64) not null,
   \"bizrule\"              text,
   \"data\"                 text,
   primary key (\"itemname\",\"userid\"),
   foreign key (\"itemname\") references 'AuthItem' (\"name\") on delete cascade on update cascade
);";
                $this->execute($sql);
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
		echo "m130529_064724_auth_tables does not support migration down.\n";
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