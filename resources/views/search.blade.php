@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Search</h2>
    <p>Here are some recommendations that derive from your preferences...</p>
    <form action="searchresults" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="search"
                placeholder="Search jobs"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>

    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
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
              @foreach($details as $queried)
              <tr>
                  <td>{{$queried->title}}</td>
                  <td>{{$queried->location}}</td>
                  <td>{{$queried->classification}}</td>
                  <td>{{$queried->workType}}</td>
                  <td>{{$queried->posted}}</td>
              </tr>
              @endforeach
          </tbody>
      </table>

      @elseif(isset($error))
      <p>There are no results pertaining to your query</p>

        @endif
    </div>

</div>


@endsection
