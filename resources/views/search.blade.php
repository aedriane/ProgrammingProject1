@extends('layouts.app')

@section('content')

@desktop

<link href="{{ asset('css/css.css') }}" rel="stylesheet">

<div class="container2">

    <div class="searchtitle">
      <center><h1><b>Search</b></h1></center>
    </div>

    <form class="form-horizontal" method="POST" action="{{ route('searchresults') }}">
        {{ csrf_field() }}

        <div class="form-group">

            <input type="text" class="input2" name="search" placeholder="Enter Keyword" style="position:relative; left:10px">
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

           <select id="classification" name="classification" class="form-control input1" placeholder="Select Classification" style="position:relative; left:90px; bottom:17px;width: 200px">
                  <option value=''>Select Classification</option>
                  @if(isset($classifications))
                   @foreach($classifications as $cla)
                   <option value="{{$cla->classification}}">{{$cla->classification}}</option>
                   @endforeach
                  @endif
           </select>

           <select id="workType" name="workType" class="form-control input1" placeholder="Select Work Type" style="position:relative; left:130px; bottom:17px;width: 200px">
                  <option value=''>Select Work Type</option>
                  @if(isset($workTypes))
                   @foreach($workTypes as $wTy)
                   <option value="{{$wTy->workType}}">{{$wTy->workType}}</option>
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



        @foreach($details as $queried)
        <hr>
        <h3><b><a href="search/{{$queried->id}}">{{$queried->title}}</a></b></h3>
        <h4><b>Location:   </b>{{$queried->location}}</h4>
        <h5><b>Classification:   </b>{{$queried->classification}}</h5>
        <ul style="position:relative; text-align:left; list-style-position:outside">
          <h5><b>Work Type:   </b>{{$queried->workType}}</h5>
          <h5><b>Created At:   </b>{{$queried->created_at}}</h5>
        </ul>
        @endforeach

      {{$details->render()}}

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
<link href="{{ asset('css/css.css') }}" rel="stylesheet">

<div class="container">

    <div class="searchtitle">
      <center><h2><strong>Search!</strong></h2>
    </div>

    <form class="form-horizontal" method="POST" action="{{ route('searchresults') }}">
      {{ csrf_field() }}


        <div class="form-group">

            <input type="text" class="input2" name="search" placeholder="Enter Keyword" style="position:relative; margin-left:auto;margin-right:auto;text-align:center; justify-content: center;width:100%">
        </div>

        <div class="form-group">
           <select id="location" name="location" class="form-control input1" placeholder="Select Location" style="  position: relative;top: 50%;left: 50%;margin-top: -50px;margin-left: -100px; width:53%; top:20px;">
                  <option value=''>Select Location</option>
                  @if(isset($locations))
                   @foreach($locations as $loc)
                   <option value="{{$loc->location}}">{{$loc->location}}</option>
                   @endforeach
                  @endif
           </select>
         </div>

        <div class="form-group">
           <select id="classification" name="classification" class="form-control input1" placeholder="Select Classification" style="  position: relative;top: 50%;left: 50%;margin-top: -50px;margin-left: -100px; width:53%; top:40px;">
                  <option value=''>Select Classification</option>
                  @if(isset($classifications))
                   @foreach($classifications as $cla)
                   <option value="{{$cla->classification}}">{{$cla->classification}}</option>
                   @endforeach
                  @endif
           </select>
         </div>

          <div class="form-group">
           <select id="workType" name="workType" class="form-control input1" placeholder="Select Work Type" style="  position: relative;top: 50%;left: 50%;margin-top: -50px;margin-left: -100px; width:53%; top:60px;">
                  <option value=''>Select Work Type</option>
                  @if(isset($workTypes))
                   @foreach($workTypes as $wTy)
                   <option value="{{$wTy->workType}}">{{$wTy->workType}}</option>
                   @endforeach
                  @endif
           </select>
        </div>


        <div class="form-group">
        <button type="submit" class="btn btn-primary button2" style="  position: relative;top: 50%;left: 50%;margin-top: -50px;margin-left: -100px; width:53%; top:100px;">
            Search
        </button>
      </div>



   </form>

    <div class="searchresault" style="position:relative; top:100px;">
        @if(isset($details))

            @if(count($details) == 1)
              <p>The Search yielded <b>{{count($details)}}</b> result for your query of <b>{{ $query }}:</b></p>
            @elseif(count($details) > 1)
              <p>The Search yielded <b>{{count($details)}}</b> results for your query <b>{{ $query }}:</b></p>
            @endif

        @foreach($details as $queried)
        <center>
        <hr>
        <h3><b><a href="search/{{$queried->id}}">{{$queried->title}}</a></b></h3>
        <h4><b>Location:   </b>{{$queried->location}}</h4>
        <h5><b>Classification:   </b>{{$queried->classification}}</h5>
        <h5><b>Work Type:   </b>{{$queried->workType}}</h5>
        <h5><b>Created At:   </b>{{$queried->created_at}}</h5>
      </center>
        @endforeach

      {{$details->render()}}

      @elseif(isset($error))
      <h4 >Sorry! We couldn't find anything. Maybe try taking the following steps…</h4>
      <ul style="position:relative; text-align:left">
        <li><h5>Change or remove filters such as classification to broaden your search.<h5></li>
        <li><h5>If using keywords, check the spelling.</h5></li>
      <ul>
    </div>
    @endif

</div>

@endmobile
@endsection
