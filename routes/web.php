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
    // return [1,2,3];
});

// Route::get('basic1',function()
// 	{
// 		return view('form');
// 	});

// Route::post('basic2',function()
// 	{
// 		return 'HELLO WORLD';
// 	});

// Route::match(['get','post'],'multy1',function()
// 	{
// 		return 'multy1';
// 	});

// Route::any('multy2',function()
// 	{
// 		return 'multy2';
// 	});

// Route::get('user/{id}',function($id)
// 	{
// 		return 'user-'.$id;
// 	});

// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'posts-'.$postId.',comments-'.$commentId;
// });

// 路由参数可选，默认为Null
// Route::get('test1/{name?}',function($name=null)
// 	{
// 		return $name;
// 	});

// 路由参数可选，默认参数不为空
// Route::get('test1/{name?}',function($name="susan")
// 	{
// 		return 'name='.$name;
// 	});

// 路由参数由正则表达式约束
// Route::get('test1/{name}',function($name)
// 	{
// 		return 'name='.$name;
// 	})->where('name','[a-zA-Z]+');

// Route::get('test1/{id?}',function($id='1')
// 	{
// 		return 'id='.$id;
// 	})->where('id','\d+');

// 多个路由参数由正则表达式约束
// Route::get('test1/{id}/{name}',function($id,$name)
// 	{
// 		return 'id='.$id.',name='.$name;
// 	})->where(['id'=>'\d+','name'=>'[a-zA-Z]+']);

// 路由别名
// Route::get('user/center',['as'=>'center',function()
// 	{
// 		return route('center');
// 	}]);

// 路由群组-路由前缀
// Route::group(['prefix'=>'member'],function()
// 	{
// 		 Route::get('user',function()
// 		 	{
// 		 		return "user";
// 		 	});
// 	});

// 路由群组-路由中间件(测试未成功)
// Route::group(['middleware'=>'test'],function(){
//     Route::get('/write/laravelacademy',function(){
//         //忽略这里
//     });
//     Route::get('/update/laravelacademy',function(){
//        //忽略这里
//     });
// });

// Route::get('/age/refuse',['as'=>'refuse',function(){
//     return "十八禁！";
// }]);

// 路由输出视图
// Route::get('view',function()
// 	{
// 		return view('welcome');
// 	});

// 路由控制访问控制器
// Route::get('member/info','MemberController@info');
// Route::get('member/info',['uses'=>'MemberController@info']);

// Route::get('test',function()
// 	{
// 		return view('test');
// 	});

// 测试DB facade
// Route::any('test',['uses'=>'StudentController@test']);

// 测试查询构造器——添加数据
// Route::any('test1',['uses'=>'StudentController@test1']);

// 测试查询构造器——删除数据
// Route::any('test2',['uses'=>'StudentController@test2']);

// 测试查询构造器——更新数据
// Route::any('test3',['uses'=>'StudentController@test3']);

// 测试查询构造器——删除数据
// Route::any('test4',['uses'=>'StudentController@test4']);

// 测试查询构造器——查询数据
// Route::any('test5',['uses'=>'StudentController@test5']);

// 测试查询构造器——聚合函数
// Route::any('test6',['uses'=>'StudentController@test6']);


// laravel中request请求对象的使用
Route::get('request/add','Admin\RequestController@add');
Route::post('request/insert','Admin\RequestController@insert');

Route::get('response','Admin\RequestController@response');

Route::post('/login','Admin\RequestController@login')->middleware('login');


