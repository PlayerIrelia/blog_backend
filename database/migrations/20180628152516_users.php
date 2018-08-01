<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
	public function change()
	{
		$table = $this->table('users',array('engine'=>'MyISAM'));
        $table->addColumn('username', 'string',array('limit' => 15,'default'=>'','comment'=>'用户名，登陆使用'))
				->addColumn('password', 'string',array('limit' => 32,'comment'=>'用户密码'))
				->create();
    }
	
	public function up()
	{

	}
	
	public function down()
	{

	}
		
}
