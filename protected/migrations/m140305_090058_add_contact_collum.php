<?php

class m140305_090058_add_contact_collum extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->addColumn('contacts', 'director_name', 'text');
                $this->addColumn('contacts', 'director_surname', 'text');
                $this->addColumn('contacts', 'director_secondname', 'text');
                $this->addColumn('contacts', 'director_photo', 'text');
                $this->addColumn('contacts', 'director_phone', 'varchar');
                $this->addColumn('contacts', 'director_email', 'varchar');
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
		echo "m140305_090058_add_contact_collum does not support migration down.\n";
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