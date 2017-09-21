@extends('layouts.app')

@section('content')
<link href="{{ asset('css/css.css') }}" rel="stylesheet">

<div class="container2">

    <div class="searchtitle">
      <h2>Search</h2>
      <p>Here are some recommendations that derive from your preferences...</p>
    </div>
    <form action="searchresults" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="input2" name="search" placeholder="Search jobs">
            <button type="submit" class="btn btn-primary button2">
                Search
            </button>
        </div>
    </form>

    <div class="searchresault">
        @if(isset($details))

            <p>The Search results for your query <b> {{ $query }} </b> are :</p>

            @if(count($details) == 1)
              <p>The Search yielded <b>{{count($details)}}</b> result for your query of <b>{{ $query }}:</b></p>
            @elseif(count($details) > 1)
              <p>The Search yielded <b>{{count($details)}}</b> results for your query <b>{{ $query }}:</b></p>

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
                  <td><a href="search/{{$queried->id}}">{{$queried->title}}</td></a>
                  <td>{{$queried->location}}</td>
                  <td>{{$queried->classification}}</td>
                  <td>{{$queried->workType}}</td>
                  <td>{{$queried->posted}}</td>
              </tr>
              @endforeach
          </tbody>
        </table>

      @elseif(isset($error))
      <h4 >Sorry! We couldn't find anything. Maybe try taking the following steps…</h4>
      <ul style="left:600px; position:absolute; text-align:left">
        <li><h5>Change or remove filters such as classification to broaden your search.<h5></li>
        <li><h5>If using keywords, check the spelling.</h5></li>
      <ul>
    </div>
    @endif

</div>

@enddesktop

@mobile

<div class="container">

    <center><h3>Search</h3><center></br>
    <form action="searchresults" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="search"
                placeholder="Search jobs"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default" >
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>

    <div class="container">
        @if(isset($details))
          @if(count($details) == 1)
            <p>The Search yielded <b>{{count($details)}}</b> result for your query of <b>{{ $query }}:</b></p>
          @elseif(count($details) > 1)
            <p>The Search yielded <b>{{count($details)}}</b> results for your query <b>{{ $query }}:</b></p>
          @endif
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
              <tr>
                  @foreach($details as $queried)
                  <td><a href="search/{{$queried->id}}">{{$queried->title}}</td></a>
                  <td>{{$queried->location}}</td>
                  <td>{{$queried->classification}}</td>
                  <td>{{$queried->workType}}</td>
                  <td>{{$queried->posted}}</td>
              </tr>
              @endforeach
          </tbody>
      </table>

      @elseif(isset($error))
      <h4 >Sorry! We couldn't find anything. Maybe try taking the following steps…</h4>
      <ul style=" text-align:left">
        <li><h5>Change or remove filters such as classification to broaden your search.<h5></li>
        <li><h5>If using keywords, check the spelling.</h5></li>
      <ul>
    </div>
    @endif

</div>

@endmobile




@endsection
