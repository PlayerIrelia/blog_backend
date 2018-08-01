<?php
namespace app\behaviors;

use think\View;
use app\common\model\Setting;

class SettingShareBehavior{

    public function run($param){
        $webName = (new Setting)->_get('web_name','');
        View::share('webName',$webName);
    }
}