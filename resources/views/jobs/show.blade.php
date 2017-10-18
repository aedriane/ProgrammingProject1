@extends('admin.layout.auth') @section('content')
<div class="container">
	<table class="table table-striped">
		<tbody>
			<h1>Title: <b>{{$jobs->title}}</b></h1>
			<br>
			<h4>Company: <b>{{$jobs->company}}</b></h4>
			<br>
			<h4>Location: <b>{{$jobs->location}}</b></h4>
			<br>
			<h4>Classification: <b>{{$jobs->classification}}</b></h4>
			<br>
			<h4>Work Type: <b>{{$jobs->workType}}</b></h4>
			<br>
			<p>{{$jobs->description}}</p>
			</br>
			<p>Posted on: <b>{{$jobs->created_at}}</b>
			</p>
		</tbody>
	</table>@endsection
</div>
