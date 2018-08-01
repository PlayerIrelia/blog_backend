<?php

namespace app\common\model;

use think\Model;

class Comment extends Model
{
    protected $table = "comments";

	public function post(){
		return $this->belongsTo(Post::class,'post_id');
	}

	public function statusText(){
	    $s ='';
	    if($this->status == -1) {
            $s = '未审核';
        }else if($this->status == 9){
            $s ='审核通过';
        }else if($this->status ==1){
            $s = '等待审核';
        }
        return $s;
    }
}


