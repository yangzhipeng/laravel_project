<!DOCTYPE html>
<html>
<head>
  <title>测试中间件</title>
</head>
<body>
  <form action="addUser" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  帐号:<input  type="text" name="name" value="{{old('name')}}"/><br>
  年龄:<input  type="text" name="age" value="{{old('age')}}"/>
  <input type="submit" value="提交" />
  </form>
</body>
</html>