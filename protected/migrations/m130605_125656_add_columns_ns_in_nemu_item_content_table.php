<?php

class m130605_125656_add_columns_ns_in_nemu_item_content_table extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->addColumn('menu_items_content', 'level', 'int');
                $this->addColumn('menu_items_content', 'lft', 'int');
                $this->addColumn('menu_items_content', 'rt', 'int');
                $this->addColumn('menu_items_content', 'root', 'int');
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
		echo "m130605_125656_add_columns_ns_in_nemu_item_content_table does not support migration down.\n";
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