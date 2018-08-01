<?php

namespace app\Backend\controller;

use think\Controller;
use think\Request;
use app\common\model\Setting AS SettingModel;

class Setting extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $setting = new SettingModel;
        return view('',compact('setting'));
    }

    public function save(Request $request){
        $settingModel = new SettingModel;
        $data = $request->post();
        foreach ($data as $key => $value){
            $settingModel->where('c_name',$key)->update(['c_value' => $value]);
        }
        $this->success('保存成功');
    }
}
