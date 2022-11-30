<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flash Session</title>
</head>
<body>

	<h1>Add new member</h1>
	@if(session('user'))
	<h2>Data saved for {{session('user')}}</h2>
   
	@endif
	<form action="storecontroller" method="POST">
		@csrf
		<input type="text" name="user" placeholder="Enter user name">
		<br><br>
		<input type="password" name="password" placeholder="Enter password">
		<br><br>
		<input type="text" name="email" placeholder="Enter Email">
		<br><br>
		<button type="submit">Add user</button>
	</form>

</body>
</html>