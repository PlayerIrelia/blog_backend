<?php

namespace app\Backend\controller;

use app\Xt\Auth;
use think\Controller;
use think\Request;
use app\common\model\User;

class Login extends Controller
{
    public function index(){
        return view('');
    }
	
	public function postLogin(Request $request){	//获取表单参数
        $username = $request->post('username');
		$password = $request->post('password');
		
		if($username =='' || $password ==''){
			$this->error('请提交完整数据');
		}
		$password = md5($password);
		
		$auth = Auth::instance();		//实例化model：auth
		$loginResult = $auth->login(['username'=>$username,'password'=>$password]);
		if($loginResult === false){
			$this->error('登录失败');
		}
		$this->redirect('/admin');
    }
	
	public function logout(Auth $auth){
		$auth->logout();
		$this->redirect('/admin/login');	
	}

}
