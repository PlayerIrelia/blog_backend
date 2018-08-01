<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Settings extends Migrator
{
    public function change(){
		$table = $this -> table('settings');
		$table 	-> addColumn('c_name','string',array('limit' => 32))
				-> addColumn('c_value','string',array('limit' => 128))
				-> create();
    }
	
	public function down(){
		$this -> dropTable('settings');
	}
}