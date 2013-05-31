<?php

class m130531_072807_inset_users_data extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->delete('AuthItemChild');
                $this->delete('AuthAssignment');
                $this->delete('users');
                $this->delete('user_groups');
                $this->delete('AuthItem');
                $this->execute('
                    insert into [user_groups] values(1, \'Administrator\', \'\');
                    insert into [users] values(1, \'cheshenkov\', \'$2a$13$qrN1KygZga8kfN2gy.X0nOCAPc1qQ9G58072rit.ipYjlQlw.QnkS\', \'????????\', \'???????\', \'cheshenkov@lbr.ru\', 1);
insert into [users] values(2, \'gutnikov\', \'$2a$13$fZTL4zlDlq3.JOabK9f88uvUFuBwPv1xWm60j/iL6s93kfRNdChx.\', \'????\', \'????????\', \'gutnikov@lbr.ru\', 1);
insert into [users] values(3, \'vasilian\', \'$2a$13$IeJbAvi1Nydq05723YiQ4.xHwv09RY7bF1b89x604raG0OSF8TeCO\', \'???? ????????\', \'????????\', \'vasilian@lbr.ru\', 1);
                ');
                $this->execute("
                    insert into [AuthItem] values('createOperation', 0, '', '', '');
                    insert into [AuthItem] values('editOperation', 0, '', '', '');
                    insert into [AuthItem] values('deleteOperation', 0, '', '', '');
                    insert into [AuthItem] values('readOperation', 0, '', '', '');
                    insert into [AuthItem] values('usersAdmin', 2, '', null, null);
                    insert into [AuthItem] values('usersReader', 2, '', null, null);
                    insert into [AuthItem] values('usersEditor', 2, '', null, null);
                    insert into [AuthItem] values('createRole', 0, '', '', '');
                    insert into [AuthItem] values('createUserGroup', 0, '', '', '');
                    insert into [AuthItem] values('createUser', 0, '', '', '');
                    insert into [AuthItem] values('editRole', 0, '', '', '');
                    insert into [AuthItem] values('deleteRole', 0, '', '', '');
                    insert into [AuthItem] values('deleteUserGroup', 0, '', '', '');
                    insert into [AuthItem] values('deleteUser', 0, '', '', '');
                    insert into [AuthItem] values('editUserGroup', 0, '', '', '');
                    insert into [AuthItem] values('editUser', 0, '', '', '');
                    insert into [AuthItem] values('readRole', 0, '', '', '');
                    insert into [AuthItem] values('readUserGroup', 0, '', '', '');
                    insert into [AuthItem] values('readUser', 0, '', '', '');
                    insert into [AuthItemChild] values('usersAdmin', 'createOperation');
                    insert into [AuthItemChild] values('usersAdmin', 'editOperation');
                    insert into [AuthItemChild] values('usersAdmin', 'deleteOperation');
                    insert into [AuthItemChild] values('usersAdmin', 'readOperation');
                    insert into [AuthItemChild] values('usersAdmin', 'createRole');
                    insert into [AuthItemChild] values('usersAdmin', 'createUserGroup');
                    insert into [AuthItemChild] values('usersAdmin', 'createUser');
                    insert into [AuthItemChild] values('usersAdmin', 'editRole');
                    insert into [AuthItemChild] values('usersAdmin', 'deleteRole');
                    insert into [AuthItemChild] values('usersAdmin', 'deleteUserGroup');
                    insert into [AuthItemChild] values('usersAdmin', 'deleteUser');
                    insert into [AuthItemChild] values('usersAdmin', 'editUserGroup');
                    insert into [AuthItemChild] values('usersAdmin', 'editUser');
                    insert into [AuthItemChild] values('usersAdmin', 'readRole');
                    insert into [AuthItemChild] values('usersAdmin', 'readUserGroup');
                    insert into [AuthItemChild] values('usersAdmin', 'readUser');
                    insert into [AuthItemChild] values('usersEditor', 'editOperation');
                    insert into [AuthItemChild] values('usersEditor', 'readOperation');
                    insert into [AuthItemChild] values('usersEditor', 'editRole');
                    insert into [AuthItemChild] values('usersEditor', 'editUserGroup');
                    insert into [AuthItemChild] values('usersEditor', 'editUser');
                    insert into [AuthItemChild] values('usersEditor', 'readRole');
                    insert into [AuthItemChild] values('usersEditor', 'readUserGroup');
                    insert into [AuthItemChild] values('usersEditor', 'readUser');
                    insert into [AuthItemChild] values('usersReader', 'readOperation');
                    insert into [AuthItemChild] values('usersReader', 'readRole');
                    insert into [AuthItemChild] values('usersReader', 'readUserGroup');
                    insert into [AuthItemChild] values('usersReader', 'readUser');
                    insert into [AuthAssignment] values('usersAdmin', '1', null, 'N;');
                    insert into [AuthAssignment] values('usersReader', '1', null, 'N;');
                    insert into [AuthAssignment] values('usersEditor', '1', null, 'N;');
                ");
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
		echo "m130531_072807_inset_users_data does not support migration down.\n";
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