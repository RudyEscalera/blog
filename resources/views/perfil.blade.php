@extends('app')

@section('title', 'Hola mundo')

@section('content')
	<p>perfil</p>
	<div class="fondoguest">
		</div>
		@foreach ($users as $user)
		{{$user->username}}
		
		
	@endforeach
@stop