<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEST</title>
</head>
<body>

	<h1><mark>{{$name}}</mark></h1>

	<!-- {{URL::current()}} -->

	<!-- {{URL::full()}}   -->
	<!-- for full url -->
	<!-- //for previous url -->
	<h1>Last URL : {{URL::previous()}}</h1>

	<a href="{{URL::to('/test1')}}">test1</a>

	<form action="{{URL::to('save_data')}}" method="POST">
		<input type="text" name="" placeholder="Enter name">
		<button>Submit</button>
	</form>

 





</body>
</html>