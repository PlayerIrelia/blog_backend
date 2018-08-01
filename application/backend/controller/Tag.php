<?php

namespace app\Backend\controller;

use think\Controller;
use think\Request;
use	app\common\model\Tag AS TagModel;

class Tag extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $tags = TagModel::all();
		return view('',compact('tags'));
		//$a=1;$b=2;$c=3;compact('$a','$b','$c');获取变量的值生成数组
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $name = $request->post('name','');
		if(!$name){
			$this->error('请填写标签名');
		}
		$data = ['name' => $name];
		if(! TagModel::create($data)){
			$this -> error('创建标签失败，请稍后再试');
		}
		$this->success('创建成功');
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
       $tag = TagModel::find($id);
	   if(!$tag){
	   		$this->errot('标签不存在');
	   }
	   return view('',compact('tag'));
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->post('name','');
		if(!$name){
			$this->error('请填写标签名');
		}
		
		$tag = TagModel::find($id);
		$tag->name = $name;
		
		if(! $tag->save()){
			$this -> error('保存失败，请稍后再试');
		}
		$this->redirect('/admin/tag/index','创建成功');
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        if(! TagModel::destroy($id)){
			$this->error('删除失败');
		}
		$this->success('删除成功');
    }
}
