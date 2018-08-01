<?php

namespace app\backend\controller;

use think\Controller;
use think\Request;
use app\common\model\Post As PostModel;
use app\common\model\Tag As TagModel;

class Post extends Controller
{
    public function index(){
        $posts = PostModel::order('create_time','desc')->paginate(10);
		return view('',compact('posts'));
    }
	
    public function create(){
        $tags = TagModel::all();
		return view('',compact('tags'));
    }

    public function save(Request $request){
       	$tags = $request -> post('tags/a');
		$title = $request -> post('title');
		$content = $request -> post('content'); 
		if($title == ''||$content ==''){
			$this -> error('请输入完整内容');
		}
		$post = new PostModel;
		$post -> title = $title;
		$post -> content = $content;
		if(! $post->save()){
			$this -> error('创建失败，请稍后再试！');
		}
		//需要关联标签
		$tags && $post->tags()->attach($tags);
		
		$this->success("创建成功");
	}
    public function read($id){
        //
    }

    public function edit($id){
        $post = PostModel::find($id);
        ! $post && $this->error('帖子不存在');
        $tags = TagModel::all();
        return view('',compact('tags','post'));
    }

    public function update(Request $request, $id){
        $tags = $request -> post('tags/a');
		$title = $request -> post('title');
		$content = $request -> post('content');
		if($title == '' || $content == ''){
			$this->error('请输入完整内容');
		}
		
		$post = PostModel::find($id);
		! $post && $this->error('帖子不存在');
		$post -> title = $title;
		$post -> content = $content;
		if($post->save() === false){
			$this->error('帖子保存失败，请稍后再试！');
		}
		
		//关联操作
		$postTags = $post->tags;
		if($postTags){
			//存在关联标签
			$postTagIds = array_column($postTags->toArray(),'id');
			//删除已有标签
			$post ->tags()->detach($postTagIds);
		}
		$tags && $post -> tags() -> saveAll($tags);
		$this->success('保存成功');	
	/*
	* ---------知识点---------
	* array_column($a,'id');  在数组a中查询id键名，生成新的数组
	* array_merge($a,$b); 合并两个数组，如果键名有重复，后者替换前者的键值；
	* array_flip()翻转键名和键值
	*/
    }
	

    public function delete($id){
        $post = PostModel::find($id);
        if(!$post){
            $this->error('帖子不存在');
        }

        //取消标签关联
        $tags = $post->tags;
        if($tags) {
            $tagIds = array_column($tags->toArray(), 'id');
            $post->tags()->detach($tagIds);
        }

        if(!PostModel::destroy($id)){
            $this->error('文章删除失败');
        }

        $this->success('文章删除成功');
    }
}
