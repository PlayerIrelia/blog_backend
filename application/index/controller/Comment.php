<?php

namespace app\Index\controller;

use think\Controller;
use think\Request;
use app\common\model\Comment AS CommentModel;

class Comment extends Controller
{

    public function save(Request $request,$id)
    {
        $comment = $request->post('content');
        if($comment == ""){
            $this->error('请输入有效内容');
        }
        $content = htmlspecialchars($comment);
        $data = [
            'post_id' => $id,
            'content' => $content,
        ];
        if(! CommentModel::create($data)){
            $this->error('系统出错');
        }
        $this->success('评论成功，请等待审核');
    }
}