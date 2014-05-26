<?php

class m140520_071725_tables_for_tech_characteristics extends CDbMigration
{
	public function up()
        {
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->createTable('measure', array(
                    'id' => 'pk',
                    'title' => 'text',
                    'reduction' => 'text',
                ));
                
                $this->createTable('tech_characteristic',array(
                    'id' => 'pk',
                    'title' => 'text',
                ));
                
                $this->createTable('product_tech_characteristic',array(
                    'id' => 'pk',
                    'product_id' => 'INTEGER CONSTRAINT [product_id] REFERENCES [products]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'measure_id' => 'INTEGER CONSTRAINT [measure_id] REFERENCES [measure]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'tech_id' => 'INTEGER CONSTRAINT [tech_id] REFERENCES [tech_characteristic]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                ));
                
                $this->createTable('product_range',array(
                    'id' => 'pk',
                    'title' => 'text',
                    'product_id' => 'INTEGER CONSTRAINT [product_id] REFERENCES [products]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                ));
                
                $this->createTable('product_range_value',array(
                    'id' => 'pk',
                    'range_id' => 'INTEGER CONSTRAINT [range_id] REFERENCES [product_range]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'tech_id'  => 'INTEGER CONSTRAINT [tech_id] REFERENCES [product_tech_characteristic]([id]) ON DELETE CASCADE ON UPDATE CASCADE',
                    'val_text' => 'text',
                    'val_int'  => 'real',
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
		echo "m140520_071725_tables_for_tech_characteristics does not support migration down.\n";
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