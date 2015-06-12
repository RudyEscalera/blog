@extends('app')

@section('content')
<head>
	<style >
	body{
            background-image: url("rino.jpg");
            background-size: cover;
            background-repeat: repeat;

        }
        #iniciar_secion, #registrarse{
            width: 350px;
            /*height: 360px;*/
            margin-top: 5%;
            margin-right: 5%;
            padding: 15px;
            border-radius: 12px;
            opacity: 0.8;

        }
        #iniciar_secion{
            float: right;
            background-color: #c7ddef;

        }
        #registrarse{
            /*clear: both;*/
            float: right;
            background-color: #f7ecb5;
        }</style>
</head>
<div id="iniciar_secion">
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
	</div>
@endsection
