<!DOCTYPE html>
<html>
<head>
	<title>Reigster</title>
</head>
<body>
	<form action="{{url('register-process')}}" method="post">
		@csrf
		<input type="text" name="full_name"><br>
		<input type="email" name="e_mail"><br>
		<input type="password" name="password"><br>
		<input type="password" name="cpassword"><br>
		<input type="submit" value="Create Your Account">
	</form>
</body>
</html>