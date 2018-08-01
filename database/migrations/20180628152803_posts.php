<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Posts extends Migrator
{

    public function change()
	{
		$table = $this->table('posts',array('engine'=>'MyISAM'));
        $table->addColumn('username', 'string',array('limit' => 60,'comment'=>'标题'))
				->addColumn('content', 'text',array('comment'=>'文章内容'))
				->addTimestamps()
				->create();
    }
	public function up(){
		
	}
	
	public function down(){
		$this -> dropTable('posts');
	}
}