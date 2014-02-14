<?php

class m130531_121821_user_data_re extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->truncateTable('AuthAssignment');
                $this->truncateTable('AuthItemChild');
                $this->truncateTable('users');
                $this->truncateTable('user_groups');
                $this->truncateTable('AuthItem');
                
                $this->execute('insert into [user_groups] values(1, \'superAdmin\', \'\');');
                
                $this->execute('insert into [users] values(1, \'cheshenkov\', \'$2a$13$qrN1KygZga8kfN2gy.X0nOCAPc1qQ9G58072rit.ipYjlQlw.QnkS\', \'Чешенков\', \'Евгений\', \'cheshenkov@lbr.ru\', 1);');
                $this->execute('insert into [users] values(2, \'gutnikov\', \'$2a$13$fZTL4zlDlq3.JOabK9f88uvUFuBwPv1xWm60j/iL6s93kfRNdChx.\', \'Олег\', \'Гутников\', \'gutnikov@lbr.ru\', 1);');
                $this->execute('insert into [users] values(3, \'vasilian\', \'$2a$13$IeJbAvi1Nydq05723YiQ4.xHwv09RY7bF1b89x604raG0OSF8TeCO\', \'Юрий Петрович\', \'Василиян\', \'vasilian@lbr.ru\', 1);');
                
                $this->execute("insert into [AuthItem] values('createOperation', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('editOperation', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('deleteOperation', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('readOperation', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('usersAdmin', 2, '', null, null);");
                $this->execute("insert into [AuthItem] values('usersReader', 2, '', null, null);");
                $this->execute("insert into [AuthItem] values('usersEditor', 2, '', null, null);");
                $this->execute("insert into [AuthItem] values('createRole', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('createUserGroup', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('createUser', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('editRole', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('deleteRole', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('deleteUserGroup', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('deleteUser', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('editUserGroup', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('editUser', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('readRole', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('readUserGroup', 0, '', '', '');");
                $this->execute("insert into [AuthItem] values('readUser', 0, '', '', '');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'createOperation');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'editOperation');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'deleteOperation');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'readOperation');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'createRole');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'createUserGroup');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'createUser');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'editRole');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'deleteRole');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'deleteUserGroup');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'deleteUser');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'editUserGroup');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'editUser');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'readRole');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'readUserGroup');");
                $this->execute("insert into [AuthItemChild] values('usersAdmin', 'readUser');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'editOperation');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'readOperation');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'editRole');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'editUserGroup');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'editUser');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'readRole');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'readUserGroup');");
                $this->execute("insert into [AuthItemChild] values('usersEditor', 'readUser');");
                $this->execute("insert into [AuthItemChild] values('usersReader', 'readOperation');");
                $this->execute("insert into [AuthItemChild] values('usersReader', 'readRole');");
                $this->execute("insert into [AuthItemChild] values('usersReader', 'readUserGroup');");
                $this->execute("insert into [AuthItemChild] values('usersReader', 'readUser');");
                $this->execute("insert into [AuthAssignment] values('usersAdmin', '1', null, 'N;');");
                $this->execute("insert into [AuthAssignment] values('usersReader', '1', null, 'N;');");
                $this->execute("insert into [AuthAssignment] values('usersEditor', '1', null, 'N;');");
                
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
		echo "m130531_121821_user_data_re does not support migration down.\n";
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