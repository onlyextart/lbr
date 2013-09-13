<?php

class m130913_055049_RE_add_Templater_kp_field extends CDbMigration
{
	public function up()
	{
            $transaction=$this->getDbConnection()->beginTransaction();
            try
            {
                $this->addColumn('template_kp', 'description2', 'TEXT');
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
		echo "m130913_055049_RE_add_Templater_kp_field does not support migration down.\n";
		return false;
	}

}