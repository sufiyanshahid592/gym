<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="{{url('login-process')}}" method="post">
		@csrf
		@if(Session::get("success"))
		<div class="alert alert-success">{{Session("success")}}</div>
		@endif
		@if(Session::get("error"))
		<div class="alert alert-danger">{{Session("error")}}</div>
		@endif
		<input type="email" name="e_mail"><br>
		<input type="password" name="password"><br>
		<input type="submit" value="SIGN-IN">
	</form>
</body>
</html>