<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save data into database</title>
</head>
<body>
	<form action="adddata" method="POST">
		@csrf
		
		<input type="text" name="name" placeholder="Enter name">
		<br><br>
		<input type="text" name="email" placeholder="Enter email">
		<br><br>
		<input type="text" name="address" placeholder="Enter address">
		<br><br>
		<button type="submit">save data</button>
	</form>

</body>
</html>