@extends('app')
@section('content')
	<h2>Nombre: {{$movie->nombre}}</h2>
	<h2>Descripcion: {{$movie->descripcion}}</h2>
	@foreach ($movie->reviews as $review)
			{{$review->content}}
			<br>
	@endforeach
		{!! Form::open(['url'=>'reviews']) !!}
		<br>
		{!! Form::label('name','review:') !!}
		{!! Form::text('content', null,['class' => 'form-control']) !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}

		{!! Form::open(['url'=>'ratings']) !!}
		<br>
		{!! Form::label('name','rating:') !!}
		{!! Form::text('value', null,['class' => 'form-control']) !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
		@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
@stop