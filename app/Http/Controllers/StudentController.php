<?php

	namespace App\Http\Controllers;

	use Illuminate\Support\Facades\DB;

	class StudentController extends Controller
	{
		// DB facade——查询数据
		public function test()
		{
			$goods=DB::select('select * from goods where id<10');
			dd($goods);
		}

		// 查询构造器——添加数据
		public function test1()
		{
			// 返回boolean类型值
			// $bool=DB::table('users')->insert(['name'=>'test','password'=>'test']);
			// var_dump($bool);

			// 返回插入数据的id
			// $id=DB::table('users')->insertGetId(['name'=>'user5','password'=>'user5']);
			// var_dump($id);

			// 同时插入多条数据,返回bool值
			$bool=DB::table('users')->insert(
				[
					['name'=>'user2','password'=>'user2','age'=>12],
					['name'=>'user3','password'=>'user3','age'=>13],
					['name'=>'user4','password'=>'user4','age'=>14]
				]);
			var_dump($bool);
		}

			// 查询构造器——更新数据
			public function test3()
			{
				// 更新为指定内容,返回影响行数
				// $num=DB::table('users')->where('id',4)->update(['name'=>'updateName']);
				// var_dump($num);

				// 自增和自减,返回影响行数

				// 每次自增步进为1
				// $num=DB::table('users')->increment('age');
				// var_dump($num);

				// 每次自增步进为指定数
				// $num=DB::table('users')->increment('age',3);
				// var_dump($num);

				// 自减关键字 decrement,返回值为受影响的行数


				// 有条件的自增和自减
				// $num=DB::table('users')->where('id',3)->decrement('age',4);
				// var_dump($num);			

				// 带条件的自增和自减以及修改其他字段,返回值仍为受影响行数
				$num=DB::table('users')->where('id',4)->decrement('age',8,['name'=>'imooc']);
			}

			// 查询构造器——删除数据
			public function test4()
			{
				// delete删除方法,返回删除受影响行数
				// $num=DB::table('users')->where('id',4)->delete();
				// var_dump($num);

				// 删除id<=指定数值的数据
				// $num=DB::table('users')->where('id','>=',9)->delete();
				// var_dump($num);

				// truncate 清空数据表,不返回任何数据
				DB::table('users')->truncate();
			}

			// 查询构造器——查询数据
			public function test5()
			{
				// 返回表中所有数据get()
				// $data=DB::table('users')->get();
				// var_dump($data);

				// 获取表中的第一条或倒数第一条数据，由oderBy决定。first()
				// $one=DB::table('users')->orderBy('id','desc')->first();
				// var_dump($one);

				// 根据条件获取表中的数据where()
				// $one=DB::table('users')->where('id','>=',2)->first();
				// var_dump($one); 

				// 多条件查询数据
				// $mul=DB::table('users')->whereRaw('id>=? and age>?',[2,13])->get();
				// var_dump($mul);

				// pluck(),返回结果集中指定字段
				// $data=DB::table('users')->where('id','>',2)->pluck('name');
				// var_dump($data);

				// lists(),作用和pluck()相同。可以指定某个键作为指定下标.
				// 测试不成功
				// $names=DB::table('users')->lists('name');
				// var_dump($names); 

				// select(),指定要查询的字段
				// $names=DB::table('users')->select('name','age')->get();
				// var_dump($names);

				// chunk(),分段获取数据
				// DB::table('goods')->orderBy('id','asc')->chunk(5,function($names)
				// {
				// 	var_dump($names);
				// 	return false;
				// });
			}

			// 查询构造器——聚合函数
			public function test6()
			{

				// count(),查询表中数据总条数，返回值为int
				// $num=DB::table('goods')->count();
				// var_dump($num);

				// max()，查询表中指定字段最大值，返回查询到的值
				// $num=DB::table('users')->max('age');
				// var_dump($num);

				// min(),查询表中指定字段最小值，返回查询到的值
				// $num=DB::table('users')->min('age');
				// var_dump($num);

				// avg(),查询表中指定字段值的平均值并返回浮点数
				// $num=DB::table('users')->avg('age');
				// var_dump($num);

				// sum(),查询表中指定字段值的总和并返回
				$num=DB::table('users')->sum('age');
				var_dump($num);
			}
	}

		