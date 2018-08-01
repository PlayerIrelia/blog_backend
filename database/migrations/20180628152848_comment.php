<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Comment extends Migrator
{
    public function change(){
        $table = $this->table('comments');
        $table  ->addColumn('post_id','integer')
				->addColumn('content','string',array('limit' => 255))
                ->addColumn('status','integer',array('default' => -1))
				->addColumn('create_at','timestamp')
                ->create();
    }

    public function up(){
				
    }

    public function down()
    {
        $this -> dropTable('posts');
    }
}
