<?php

class m150602_071847_create_table_akcii_product extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('akcii_product',array(
                    'id' => 'pk',
                    'item_id' => 'INTEGER CONSTRAINT [item_id] REFERENCES [menu_items]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'group_id'=>'INTEGER CONSTRAINT [group_id] REFERENCES [akcii_group]([id]) ON DELETE SET NULL ON UPDATE SET NULL',
                    'description' => 'text',
                    'published' => 'int',
                    'range' => 'int',
                    'solid_type'=>'INTEGER CONSTRAINT [solid_type] REFERENCES [akcii_img_solid]([id]) ON DELETE SET NULL ON UPDATE SET NULL',
                    'solid_text_top'=>'text',
                    'solid_text_bottom'=>'text',
                    'solid_percent'=>'text'
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
		echo "m150602_071847_create_table_akcii_product does not support migration down.\n";
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