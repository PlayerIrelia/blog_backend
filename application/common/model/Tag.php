<?php

namespace app\common\model;

use think\Model;

class Tag extends Model
{
    protected $table = 'tags';
	
	public function posts(){
		return $this -> belongsToMany(Post::class,'posts_tags','post_id');
	}
}
