<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Get data from database</title>
</head>
<body>

	<h1>Member list</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Address</td>
			<td>Operations</td>

		</tr>
		@foreach($members as $member)
		<tr>
			<td>{{$member['id']}}</td>
			<td>{{$member['name']}}</td>
			<td>{{$member['email']}}</td>
			<td>{{$member['address']}}</td>	
			<td><a href="{{url('delete',$member->id)}}">Delete</a></td>
			<td><a href="{{url('edit',$member->id)}}">Update</a></td>

		</tr>
		@endforeach
	</table>
	<div>
		{{$members->links()}}

	</div>
		 <!-- links() is a laravel function -->

<style type="text/css">
	.w-5{
		display: none;
	}
</style>
</body>
</html>
