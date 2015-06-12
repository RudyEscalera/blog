@extends('app')

@section('title', 'Hola mundo')

@section('content')
	<div class="fondoguest">
		<p>{{$mensaje}}</p>
		</div>
		@foreach ($users as $user)
		<div class='form-control'>
		{{$user->username}}</div>
		 </br>
	@endforeach
@stop
