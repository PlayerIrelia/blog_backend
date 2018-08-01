<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\Post AS PostModel;

class Index
{
    public function index()
    {
        $posts = PostModel::order('create_time','desc')->paginate(10);
        return view('',compact('posts'));
    }

    public function read($id){
        $post = PostModel::find($id);
        if(!$post){
            $this->error('文章不存在');
        }
        return view('',compact(
            'post'));
    }
}
