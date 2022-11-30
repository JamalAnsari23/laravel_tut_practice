<h1>student Page</h1>

@include('about');

<!-- <h2>{{90/3}}</h2> -->



@foreach($users as $user)
<h6>{{$user}}</h6>
@endforeach

<script type="text/javascript">
	var data = @json($users);
	console.log(data);
	document.write(data[0]);
</script>



