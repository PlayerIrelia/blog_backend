<?php

use think\migration\Seeder;

class InitSetting extends Seeder
{
    public function run()
    {
        $data = [
            'web_name' => '',
            'web_domain' => '',
            'web_icp' => '',
            'seo_keywords' => '',
            'seo_description' => '',
        ];
        $setting = $this->table('settings');
        foreach($data as $key => $value){
            $setting ->insert([
                'c_name' => $key,
                'c_value' => $value,
            ])->save();
        }
    }
}