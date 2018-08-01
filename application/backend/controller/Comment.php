<?php

namespace app\Backend\controller;

use think\Controller;
use think\Request;
use app\common\model\Comment AS CommentModel;

class Comment extends Controller
{
    protected $table = "comments";

    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(){
        $comments = CommentModel::order('id','desc')->paginate(15);
        return view('',compact('comments'));
    }

    public function delete($id)
    {
        $comment = CommentModel::find($id);
        if(! $comment){
            $this->error('评论不存在');
        }
        if(! $comment->delete()){
            $this->error('删除失败');
        }
        $this->success('删除成功');
    }

    public function check($id,Request $request)
    {
        $comment = CommentModel::find($id);
        if(! $comment){
            $this->error('评论不存在');
        }
        $status = $request->get('status');
        $comment->status=$status;
        if(! $comment->save()){
            $this->error('操作失败');
        }
        $this->success('成功');
    }
}
