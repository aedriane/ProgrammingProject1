@extends('layouts.app') @section('content')
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<div class="container2">
	<table class="table table-striped">
		<tbody>@foreach($jobs as $job)
			<h1><b>{{$job->title}}</b></h1>
			<br>
			<h3>{{$job->company}}</h3>
			<br>
			<h4>Location: {{$job->location}}</h4>
			<br>
			<h4>Classification: {{$job->classification}}</h4>
			<br>
			<h4>Work Type: {{$job->workType}}</h4>
			<br>
			<p>{{$job->description}}</p>
			</br>
			<p>Posted on: {{$job->created_at}}</p>@endforeach</tbody>
	</table> <a href="{{route('apply')}}">
        {{ csrf_field() }}

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary" style="position:relative;left:80px">
                Apply
            </button>
        </div>
    </div>

  </a>
</div>@endsection
