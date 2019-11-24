<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->group(function(){

});
Route::any('index','admin\AdminController@index');

//课程模板
Route::prefix('/class')->group(function(){
    route::any('class_cate_add','class1\ClassController@class_cate_add');//添加课程分类
    route::any('class_cate_add_do','class1\ClassController@class_cate_add_do');//添加课程分类执行
});


Route::get('/login','admin\loginController@login');
Route::post('/doLogin','admin\loginController@doLogin');




//**************************资讯增删改查***********************************************
//咨询添加
Route::post('/InformationController/informationadd','InformationController@informationadd');
//资讯展示
Route::any('/InformationController/informationshow','InformationController@informationshow');
//资讯修改视图
Route::any('/InformationController/informationupdate_view/{information_id}','InformationController@informationupdate_view');
//资讯修改
Route::post('/InformationController/informationupdate','InformationController@informationupdate');
//资讯删除
Route::any('/InformationController/informationdel/{information_id}','InformationController@informationdel');
//咨询添加视图
Route::get('/informationadd_view', function () {
    return view('admin/information/add');
});
//后台首页视图
Route::get('/admin/index', function () {
    return view('admin/index');
});
//*********************************考试增删改查******************************************

//考试添加页面
Route::get('/ExamController/exam_add_view','ExamController@exam_add_view');
//考试指导展示页面
Route::get('/ExamController/exam_show','ExamController@exam_show');
//考试修改页面
Route::get('/ExamController/exam_update_view/{exam_id}','ExamController@exam_update_view');
//考试添加接口
Route::post('/ExamController/examadd','ExamController@examadd');
//考试修改接口
Route::post('/ExamController/examupdate','ExamController@examupdate');
//考试删除接口
Route::any('/ExamController/examdel/{exam_id}','ExamController@examdel');
//**********************************活动增删改查********************************************
//活动添加页面
Route::get('/ActivityController/activity_add_view','ActivityController@activity_add_view');
//活动展示页面
Route::get('/ActivityController/activity_show','ActivityController@activity_show');
//活动修改页面
Route::get('/ActivityController/activity_update_view/{activity_id}','ActivityController@activity_update_view');
//活动添加接口
Route::post('/ActivityController/activityadd','ActivityController@activityadd');
//活动修改接口
Route::post('/ActivityController/activityupdate','ActivityController@activityupdate');
//活动删除接口
Route::any('/ActivityController/activitydel/{activity_id}','ActivityController@activitydel');
//**********************************课程收藏、收藏夹************************************
//**************************************************************************************

//++++++++++++++++++++++++[加入收藏]+++++++
//展示课程
Route::get('/CollectController/select_course','CollectController@select_course');
//生成收藏夹的视图



Route::get('/CollectController/create_favorite_view/{course_id}/{user_id}','CollectController@create_favorite_view');

//已有收藏夹新建收藏夹
Route::get('/CollectController/create_favorite_view_1/{user_id}/{course_id}','CollectController@create_favorite_view_1');





//生成收藏夹
Route::post('/CollectController/create_favorite/','CollectController@create_favorite');
//生成收藏的视图
Route::any('/CollectController/create_collect_view/{course_id}/{user_id}','CollectController@create_collect_view');
//生成收藏
Route::any('/CollectController/create_collect','CollectController@create_collect');

//++++++++++++++++++++++++[收藏夹增删改查]++++
//展示视图兼接口
Route::get('/CollectController/favorite_list','CollectController@favorite_list');
//收藏夹修改视图
Route::get('/CollectController/favorite_update_view/{favorite_id}','CollectController@favorite_update_view');
//执行修改收藏夹
Route::post('/CollectController/favoriteupdate','CollectController@favoriteupdate');
//执行删除
Route::get('/CollectController/favoritedel/{favorite_id}','CollectController@favoritedel');

//+++++++++++++++++++++++【收藏表的增删改查】+++++++++++
//收藏表 展示 搜索分页——无bug
Route::get('/CollectController/collect_list','CollectController@collect_list');
//收藏表修改页面
Route::get('/CollectController/collect_update_view/{collect_id}','CollectController@collect_update_view');
//收藏执行修改
Route::post('/CollectController/collectupdate','CollectController@collectupdate');
//收藏执行删除
Route::get('/CollectController/collectdel/{collect_id}/{u_id}','CollectController@collectdel');




//************************************课程公告************************************
//********************************************************************************
//创建公告视图
Route::get('/NoticeController/create_notice_view','NoticeController@create_notice_view');
//公告列表页面
Route::get('/NoticeController/notice_show_view','NoticeController@notice_show_view');
//公告修改页面
Route::get('/NoticeController/notice_update_view/{notice_id}','NoticeController@notice_update_view');
//创建公告
Route::post('/NoticeController/create_notice','NoticeController@create_notice');
//公告修改接口
Route::post('/NoticeController/noticeupdate','NoticeController@noticeupdate');
//公告删除接口
Route::get('/NoticeController/noticedel/{notice_id}','NoticeController@noticedel');

//*************************************订单管理**********************************
//******************************************************************************************
//订单增加页面
Route::get('/OrderController/create_order_view','OrderController@create_order_view');
//订单增加
Route::post('/OrderController/create_order','OrderController@create_order');
//订单展示
Route::get('/OrderController/order_show','OrderController@order_show');
//订单删除
Route::get('/OrderController/orderdel/{order_id}','OrderController@orderdel');
//添加订单详情
Route::get('/OrderController/create_detail_view','OrderController@create_detail_view');
//添加订单详情
Route::post('/OrderController/create_detail','OrderController@create_detail');
//订单详情展示
Route::get('/OrderController/detail_show/{order_id}/{u_id}','OrderController@detail_show');
//订单详情修改页面
Route::get('/OrderController/detail_update_view/{detail_id}','OrderController@detail_update_view');
//订单详情修改
Route::post('/OrderController/detail_update','OrderController@detail_update');
//订单详情中查看用户详情
Route::get('/OrderController/select_user_detail/{detail_id}','OrderController@select_user_detail');
//订单详情中查看讲师详情
Route::get('/OrderController/select_teacher_detail/{detail_id}','OrderController@select_teacher_detail');
//订单详情中查看课程详情
Route::get('/OrderController/select_course_detail/{detail_id}','OrderController@select_course_detail');

