@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">

      <a href="{{route('apply')}}" >
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
            @foreach($jobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->description}}</td>
                <td>{{$job->location}}</td>
                <td>{{$job->classification}}</td>
                <td>{{$job->workType}}</td>
                <td>{{$job->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Apply
            </button>
        </div>
    </div>

  </a>

</div>




@endsection
