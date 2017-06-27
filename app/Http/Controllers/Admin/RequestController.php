<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Request;

class RequestController extends Controller
{
	// facade方式
	public function add()
	{
		return view('request.form');
	}

	// 依赖注入
    public function insert(Request $request)
    {
    	// $name=$request::input('name');
    	// var_dump($name);

    	// $name=\Request::input('name');
    	// $age=$request->input('age');
    	// var_dump($name);
    	// var_dump($age);

    	// $path=$request->path();
    	// return $path;		//request/insert

    	// dd($request);
    	// 不能在路由规则前加斜杠
    	// if($request->is('request/*'))
    	// {
    	// 	echo 111;
    	// }else
    	// {
    	// 	echo 222;
    	// }

    	// $url=$request->url();
    	// return $url;	//http://laravel183.com/request/insert

    	// 在form.blade.php中的action处加参数:request/insert/a=1&b=2
    	// $fullUrl=$request->fullUrl();
    	// return $fullUrl;		//http://laravel183.com/request/insert?a=1&b=2

    	// $method=$request->method();
    	// var_dump($method);		//post

    	// $res=$request->isMethod("get");
    	// var_dump($res);

    	// 可获取get和post传的全部值
    	// $res=$request->all();
    	// var_dump($res);

    	//  input 方法的第二个参数传入一个默认值。当请求的输入数据“不存在”于此请求时，返回该默认值：
    	// sex在form表单传递数据数并不存在，所有可以打印默认值。字段必须是不存在的
    	// $res=$request->input('sex','male');

    	// 获取部分输入数据.sex在表单中不存在，获取的值为Null
    	// $res=$request->only('name','sex');

    	// $res=$request->except('name');

    	// sex在表单中不存在，值获取到name 和 age 字段
    	// $res=$request->intersect(['name','sex','age']);

    	// 判断请求是否存在该数据。当数据存在 并且 字符串不为空时，has 方法就会返回  true
    	// $res=$request->has('name');
    	// var_dump($res);

    	// 旧输入数据
    	// $request->flash();
    	// $res=redirect('/request/add');

    	// $request->flashOnly('name');

    	// $request->flashExcept('name');
    	// return redirect('/request/add');

    	// return redirect('/request/add')->withInput();

    	// return redirect('request/add')->withInput(
    	// 		$request->except('age')
    	// 	);

		// return response('hello world')->cookie('name','ls',10);
		// $res=$request->cookie('name');
		// var_dump($res);

    	// 生成cookie的更简单的方式
		// \Cookie::queue('age',18,10);

		// $res=$request->cookie('age');

		// $res=$request->cookie('name','age');
		// var_dump($res);

		// $cookie=cookie('sex','male',1);
		// return response('hello world')->cookie($cookie);


    	// 文件资源
    	// 获取上传文件
    	// $file=$request->file('picture');
    	// dd($file);

    	// $extension=$request->file('picture')->extension();
    	// $extension=$request->picture->extension();
    	// var_dump($extension);

    	// $filename=time().'.'.$extension;
    	// var_dump($filename);
    	// if($request->file('picture')->isValid())
    	// {
    	// 	$request->file('picture')->move('./uploads',$filename);
    	// }else{
    	// 	echo "上传文件无效";
    	// }

    	// $path=$request->picture->path();
    	// var_dump($path);   

    	// 重定向并附加Session闪存数据
    	return redirect('request/add')->with('status','profile');
    }


    public function response(Request $request)
    {
    	// \Cookie::queue('name','lisi',10);

    	// 重定向至命名路由(测试不成功)
    	// return redirect()->route('\request\add');

    	// return view();

//     	return response()->json([
// 		    'name' => 'Abigail',
// 		    'state' => 'CA'
// ]		);


    	// return response()->download('./uploads/1498485996.jpeg');

    	return response()->file('./uploads/1498485996.jpeg', $headers);
    }

    public function login()
    {
    	return '登录成功';
    }
}
