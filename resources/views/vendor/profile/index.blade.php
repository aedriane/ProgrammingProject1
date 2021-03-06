@extends('layouts.app') @section('content') @desktop
<div class="container">
	<div class="row">
		<div class="col-sm-3">@include('profile::_menu')</div>
		<div class="col-sm-8">
			<div class="row">
				<div class="col-md-13" style="position:relative;right:11px; width:797px">
					<div class="panel panel-default">
						<div class="panel-heading">Profile Picture</div>
						<div class="panel-body">
							<p class="text-center">
								<img class="img-responsive img-thumbnail" src="{{ 'https://www.gravatar.com/avatar/'.md5(Auth::user()->email).'.png?s=128&d=mm' }}" alt="Profile Picture">
							</p>
						</div>
						<div class="panel-footer">To update your profile picture, please visit <a href="https://www.gravatar.com" target="_blank">Gravatar <i
                                            class="fa fa-external-link"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-13" style="position:relative;right:11px; width:797px; bottom:22px">
					<div class="panel panel-default">
						<div class="panel-heading">Contact Information</div>
						<div class="panel-body">
							<form action="{{ route('profile.contact-info.store') }}" class="form-horizontal" method="post">{{ csrf_field() }} {{ method_field('put') }}
								<div class="form-group">
									<label class="col-lg-3 control-label">First Name:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" value="{{Auth::user()->firstname}}" name="firstname">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Last Name:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" value="{{Auth::user()->lastname}}" name="lastname">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Email Address</label>
									<div class="col-md-9">
										<input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-9 col-md-offset-3">
										<button class="btn btn-primary">Save Changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>@enddesktop @mobile
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">@include('profile::_menu')</div>
		<div class="col-sm-8">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Profile Picture</div>
						<div class="panel-body">
							<p class="text-center">
								<img class="img-responsive img-thumbnail" src="{{ 'https://www.gravatar.com/avatar/'.md5(Auth::user()->email).'.png?s=128&d=mm' }}" alt="Profile Picture">
							</p>
						</div>
						<div class="panel-footer">To update your profile picture, please visit <a href="https://www.gravatar.com" target="_blank">Gravatar <i
                                        class="fa fa-external-link"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Contact Information</div>
						<div class="panel-body">
							<form action="{{ route('profile.contact-info.store') }}" class="form-horizontal" method="post">{{ csrf_field() }} {{ method_field('put') }}
								<div class="form-group">
									<label class="col-lg-3 control-label">First Name:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" value="{{Auth::user()->firstname}}" name="firstname">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Last Name:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" value="{{Auth::user()->lastname}}" name="lastname">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Email Address</label>
									<div class="col-md-9">
										<input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-9 col-md-offset-3">
										<button class="btn btn-primary">Save Changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>@endmobile @endsection
