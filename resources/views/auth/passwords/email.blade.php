@extends('layouts.app') @section('content')
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<div class="container2">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="">
				<div class="panel-heading title">Reset Password</div>
				<div class="panel-body">@if (session('status'))
					<div class="alert alert-success">{{ session('status') }}</div>@endif
					<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">{{ csrf_field() }}
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="inputbna">E-Mail Address</label>
							<div class="col-md-6">
								<input id="email" type="email" class="form-control input1" name="email" value="{{ old('email') }}" required>@if ($errors->has('email')) <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary button1">Send Password Reset Link</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>@endsection
