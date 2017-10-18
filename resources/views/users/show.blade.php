@extends('admin.layout.auth') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<table class="table table-striped">
					<tbody>
						<h1>Username: <b>{{$users->username}}</b></h1>
						<br>
						<h4>First Name: <b>{{$users->firstname}}</b></h4>
						<br>
						<h4>Last Name: <b>{{$users->lastname}}</b></h4>
						<br>
						<h4>Location: <b>{{$users->location}}</b></h4>
						<br>
						<h4>Classification: <b>{{$users->classification}}</b></h4>
						<br>
						<h4>Work Type: <b>{{$users->workType}}</b></h4>
						<br>
						<h4>Created: <b>{{$users->created_at}}</b></h4>
						<br>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>@endsection
