<?php

namespace app\Backend\controller;

use think\Controller;
use think\Request;
use app\Xt\Auth;
use app\common\model\User;

class Account extends Controller
{

    public function index()
    {
        return view('');
    }

    public function save(Auth $auth,Request $request){
        $password = $requeset ->post('password');
        if(User::where('id',$auth->id())->update(['password' => md5($password)])){
            $this->error('保存成功');
        }
        $this->success('保存成功');
    }
}