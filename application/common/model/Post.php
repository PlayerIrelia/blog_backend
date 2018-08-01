<?php

namespace app\common\model;

use think\Model;

class Post extends Model
{
    protected $table = 'posts';
	
	//自动时间戳属性
	protected $autoWriteTimestamp = 'timestamp';
	
	public function comments(){
		return $this->hasMany(Comment::class,'post_id');	 
	}
	
	//$this->tags
	public function tags(){
		return $this -> belongsToMany(Tag::class,'posts_tags','tag_id');
	}

	public function hasTag($tagId){
	    return $this->tags()->where('pivot.tag_id',$tagId)->find();
    }

    //通过审核的评论
    public function getShowComments(){
	    return $this->comments()->where('status',9)->paginate(6);

    }
}
