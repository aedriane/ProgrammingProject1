@extends('admin.layout.auth') @section('content')
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<div class="container2">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="">
				<div class="panel-heading title">Administrator Register</div>
				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">{{ csrf_field() }}
						<div class="sectiontitle">
							<p class="sectionname">Admin Details</p>
						</div>
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
							<label for="username" class="inputbna">Username</label>
							<div class="col-md-6">
								<input id="username" type="text" class="form-control input1" name="username" value="{{ old('username') }}" required>@if ($errors->has('username')) <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
								@endif</div>
						</div>
						<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
							<label for="firstname" class="inputbna">First Name</label>
							<div class="col-md-6">
								<input id="firstname" type="text" class="form-control input1" name="firstname" value="{{ old('firstname') }}" required autofocus>@if ($errors->has('firstname')) <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
								@endif</div>
						</div>
						<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
							<label for="lastname" class="inputbna">Last Name</label>
							<div class="col-md-6">
								<input id="lastname" type="text" class="form-control input1" name="lastname" value="{{ old('lastname') }}" required autofocus>@if ($errors->has('lastname')) <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
								@endif</div>
						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="inputbna">E-Mail Address</label>
							<div class="col-md-6">
								<input id="email" type="email" class="form-control input1" name="email" value="{{ old('email') }}" required>@if ($errors->has('email')) <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif</div>
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="inputbna">Password</label>
							<div class="col-md-6">
								<input id="password" type="password" class="form-control input1" name="password" required>@if ($errors->has('password')) <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif</div>
						</div>
						<div class="form-group">
							<label for="password-confirm" class="inputbna">Confirm Password</label>
							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control input1" name="password_confirmation" required>
							</div>
						</div>
						<div class="form-group">
							<div class="butnlink">
								<button type="submit" class="btn btn-primary button1">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>@endsection
