@extends('layouts.app')

@section('content')





<div class="container">

    <h2>Recommendations...</h2>
    <p>Here are some recommendations that derive from your preferences...</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Classification</th>
                <th>Work Type</th>
                <th>Posted</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->location}}</td>
                <td>{{$job->classification}}</td>
                <td>{{$job->workType}}</td>
                <td>{{$job->posted}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection
