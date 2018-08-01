<?php
use think\Route;
use app\Xt\Auth;

//前台路由
Route::get('/','index/index/index');
Route::get('/post/:id','index/index/read');
Route::post('/post/:id/comment','index/comment/save');

//后台路由
Route::get('/admin','backend/index/index');
////后台登录
Route::get('/admin/login','backend/login/index');
Route::post('/admin/login','backend/login/postLogin');
Route::get('/admin/logout','backend/login/logout');

if(Auth::instance()->check()){

    //标签路由
    //查看
    Route::get('/admin/tag/index','backend/tag/index');
    //创建
    Route::get('/admin/tag/create','backend/tag/create');
    Route::post('/admin/tag/create','backend/tag/save');
    //编辑
    Route::get('/admin/tag/:id/edit','backend/tag/edit');
    Route::post('/admin/tag/:id/edit','backend/tag/update');
    //删除
    Route::get('/admin/tag/:id/delete','backend/tag/delete');

    //文章路由
    //查看
    Route::get('/admin/post/index','backend/post/index');
    Route::get('/admin/post/:id/view','backend/post/view');
    //创建
    Route::get('/admin/post/create','backend/post/create');
    Route::post('/admin/post/create','backend/post/save');
    //编辑
    Route::get('/admin/post/:id/edit','backend/post/edit');
    Route::post('/admin/post/:id/edit','backend/post/update');
    //删除
    Route::get('/admin/post/:id/delete','backend/post/delete');

    //评论管理
    Route::get('/admin/comment/index','backend/comment/index');
    Route::get('/admin/comment/:id/delete','backend/comment/delete');
    Route::get('/admin/comment/:id/check','backend/comment/check');

    //配置
    Route::get('/admin/setting','backend/setting/index');
    Route::post('/admin/setting','backend/setting/save');

    //修改密码
    Route::get('/admin/account','backend/account/index');
    Route::post('/admin/account','backend/account/save');

}