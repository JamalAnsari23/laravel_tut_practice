<h1>User list</h1>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Photo</td>

	</tr>
	@foreach($collection as $detail)
	<tr>
		<td>{{$detail['id']}}</td>
		<td>{{$detail['first_name']}}</td>
		<td>{{$detail['email']}}</td>
		<td><img src="{{$detail['avatar']}}" alt=""  /></td>


	</tr>
	@endforeach
	
</table>