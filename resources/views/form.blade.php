<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<h1>User Form</h1>
	<form action="form" method="POST">
		@csrf
		<!-- {{method_field('PUT')}} -->
		<input type="text" name="username" placeholder="Enter user id">
		<br><br>
		<input type="password" name="password" placeholder="Enter user password">
		<br><br>
		<button type="submit">Login</button>
	</form>
	<!-- //content delevering network -->

</body>
</html>