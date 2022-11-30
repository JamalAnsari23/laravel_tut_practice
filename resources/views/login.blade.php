<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
</head>
<body>

	<h1>user login</h1>
	<form action="useraction" method="POST">
		@csrf
		<input type="text" name="user" placeholder="Enter user name"><br><br>
		<input type="password" name="password" placeholder="Enter password"><br><br>
		<button type="submit">Login</button>
	</form>
</body>
</html>