<?php

class m140324_142828_add_column_kp extends CDbMigration
{
	public function up()
	{
	   $this->addColumn('kp', 'product_info', 'TEXT');
	}

	public function down()
	{
		echo "m140324_142828_add_column_kp does not support migration down.\n";
		return false;
	}
}