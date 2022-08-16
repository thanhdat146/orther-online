@if(session()->has('error'))
	
		<p class="alert alert-danger" >{{session()->get('error')}}</p>
@endif

@foreach($errors->all() as $error)
	<p class="alert alert-danger" >{{$error}}</p>
@endforeach
