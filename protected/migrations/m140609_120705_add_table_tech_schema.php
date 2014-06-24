<?php

class m140609_120705_add_table_tech_schema extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('tech_schema', array(
                    'id' => 'pk',
                    'title' => 'text',
                    'lft' => 'int',
                    'rt' => 'int',
                    'level' => 'int',
                    'root' => 'int',
                    'img' => 'text',
                ));
                
                $this->createTable('tech_stage', array(
                    'id' => 'pk',
                    'title' => 'text',
                    //'img' => 'text',
                    //'schema_id' => 'INTEGER CONSTRAINT [schema_id] REFERENCES [tech_schema]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                ));
                
                $this->createTable('tech_schema_stage', array(
                    'id' => 'pk',
                    'schema_id' => 'INTEGER CONSTRAINT [schema_id] REFERENCES [tech_schema]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'stage_id' => 'INTEGER CONSTRAINT [stage_id] REFERENCES [tech_stage]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'level' => 'int',
                    'img' => 'text',
                ));
                
                $this->createTable('product_tech_schema', array(
                    'id' => 'pk',
                    'stage_id' => 'INTEGER CONSTRAINT [stage_id] REFERENCES [tech_schema_stage]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'product_id' => 'INTEGER CONSTRAINT [product_id] REFERENCES [products]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
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
		echo "m140609_120705_add_table_tech_schema does not support migration down.\n";
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