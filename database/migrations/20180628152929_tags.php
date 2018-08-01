<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Tags extends Migrator{
    public function change(){
		$table = $this->table('tags');
		$table -> addColumn('name','string',array('limit' => 32))
				-> create();
	}
	
	
	public function down(){
		$this -> dropTabel('tags');
	}
}
