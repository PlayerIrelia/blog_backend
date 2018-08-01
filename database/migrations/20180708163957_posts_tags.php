<?php

use think\migration\Migrator;
use think\migration\db\Column;

class PostsTags extends Migrator{
    public function change(){
		$table = $this->table('posts_tags');
		$table -> addColumn('post_id','integer',array('limit' => 4))
				-> addColumn('tag_id','integer',array('limit' => 4))
				-> create();
	}
	
	
	public function down(){
		$this -> dropTabel('psots_tags');
	}
}
