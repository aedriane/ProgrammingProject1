@extends('layouts.app')

@section('content')

@desktop

<link href="{{ asset('css/css.css') }}" rel="stylesheet">

<div class="container2">

    <div class="searchtitle">
      <h2>Search</h2>
    </div>

    <form class="form-horizontal" method="POST" action="{{ route('searchresults') }}">
        {{ csrf_field() }}


        <div class="form-group">

            <input type="text" class="input2" name="search" placeholder="Search jobs" style="position:relative; left:10px">
            <button type="submit" class="btn btn-primary button2" style="position:relative; left:50px">
                Search
            </button>
        </div>

        <div class="form-group">
           <select id="location" name="location" class="form-control input1" placeholder="Select Location" style="position:relative; left:50px; bottom:17px;width: 200px">
                  <option value=''>Select Location</option>
                  @if(isset($locations))
                   @foreach($locations as $loc)
                   <option value="{{$loc->location}}">{{$loc->location}}</option>
                   @endforeach
                  @endif
           </select>
        </div>

   </form>










    <div class="searchresault">
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
              @foreach($details as $queried)
              <tr>
                  <td><a href="search/{{$queried->id}}">{{$queried->title}}</td></a>
                  <td>{{$queried->location}}</td>
                  <td>{{$queried->classification}}</td>
                  <td>{{$queried->workType}}</td>
                  <td>{{$queried->created_at}}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{$details->links()}}



      @elseif(isset($error))
      <h4 >Sorry! We couldn't find anything. Maybe try taking the following steps…</h4>
      <ul style="position:relative; text-align:left">
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
                  <td>{{$queried->created_at}</td>
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
