<?php

class m150521_104818_create_table_akcii_group extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
               $sql ="
                     create table IF NOT EXISTS 'akcii_group'
                     (
                       'id'                     int auto_increment not null,
                       'item_id'                int not null,
                       'description'            text,
                       'published'              int,
                       'range'                  int,
                        primary key ('id'),
                        foreign key ('item_id') references 'menu_items' ('id') on delete cascade on update cascade
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
		echo "m150521_104818_create_table_akcii_group does not support migration down.\n";
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