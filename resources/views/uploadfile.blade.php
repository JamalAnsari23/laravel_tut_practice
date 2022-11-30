<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload File</title>
</head>
<body>

	<h1>Upload File</h1>
	<form action="uploadfile" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="file" name="document"> <br><br>
		<button type="submit">Upload File</button>
	</form>
</body>
</html>