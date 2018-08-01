<?php
namespace app\Xt;

use Exception;
use app\common\model\User;

class Auth {

    static $instance = null;

    protected $user = null;

    protected $model = null;

    const SESSION_KEY_NAME = 'user_id';

    private function __construct()
    {
        $this->model = new User;
    }

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // 登陆
    public function login($loginData)
    {
        if (! isset($loginData['username'])) {
            throw new Exception("username field not found.");
        }
        if (! isset($loginData['password'])) {
            throw new Exception("password field not found.");
        }
        $user = $this->model->where($loginData)->find();
        if (is_null($user)) {
            return false;
        }
        // 存储user对象
        $this->user = $user;
        // 生成凭证
        $this->generateCredential();
        return true;
    }

    // 登出
    public function logout()
    {
        session(self::SESSION_KEY_NAME, null);
    }

    // 获取当前得登陆用户
    public function user()
    {
        return $this->user;
    }

    // 获取当前用户ID
    public function id()
    {
        return session(self::SESSION_KEY_NAME);
    }

    // 登陆的检测
    public function check()
    {
        if (! $this->id()) {
            return false;
        }
        if (is_null($this->user)) {
            // 还需要查询下数据
            $user = $this->model->find($this->id());
            $this->user = $user;
        }
        return $this->user;
    }

    // 生成用户凭证
    protected function generateCredential()
    {
        session(self::SESSION_KEY_NAME, $this->user->id);
    }

}