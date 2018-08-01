<?php

namespace app\common\model;

use think\Model;

class Setting extends Model
{
    protected $table = 'settings';

    public function _get($name,$default =''){
        //get的方法的意义：当加载类时，类中没有相应的方法，择采用get方法
        $item = $this->where('c_name',$name)->find();
        return $item ? $item->c_value : $default;
    }
}
