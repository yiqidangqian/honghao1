<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	{{ session('status')}}
	<h1>post路由方法测试</h1>
	<form action="/login" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- 姓名:<input type="text" name="name" value="{{old('name')}}"><br/><br/> -->
		年龄:<input type="text" name="age" value="{{old('age')}}"><br/><br/>
		{{--{{csrf_field()}}--}}
		<!-- 文件:<input type="file" name="picture"/><br/><br/> -->
		<button>提交</button>
	</form> 
</body>
</html>
