@extends('admin.layout.auth')

@section('content')
<div class="container">
    <table class="table table-striped">

      <a href="{{route('jobs.index')}}" >
          {{ csrf_field() }}
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Classification</th>
                <th>Work Type</th>
                <th>Posted</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$jobs->title}}</td>
                <td>{{$jobs->description}}</td>
                <td>{{$jobs->location}}</td>
                <td>{{$jobs->classification}}</td>
                <td>{{$jobs->workType}}</td>
                <td>{{$jobs->created_at}}</td>
            </tr>
        </tbody>
    </table>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Back
            </button>
        </div>
    </div>

@endsection
