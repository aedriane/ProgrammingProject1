@extends('layouts.app')

@section('content')
<link href="{{ asset('css/css.css') }}" rel="stylesheet">


@desktop

<div class="container2">

    <div class="searchresault">
      <center><h1><b>Recommendations...</b></h1>
      <p>Here are some recommendations that derive from your preferences...</p></center>
    </div>
    @if(isset($jobs))

    <table class="table table-striped">

        <tbody>
            @if(count($jobs) == 0)

                <h4 style="position:absolute; top:350px; left:550px">Sorry! There are no recommended jobs pertaining to your preferences at the moment...</h4>
                <h4 style="position:absolute; top:370px; left:560px">Check back later to discover potential new jobs in regards to your preferences!</h4>

            @elseif(count($jobs) >= 1)

            @foreach($jobs as $job)
            <hr>
            <h4><b><a href="search/{{$job->id}}">{{$job->title}}</a></b></h4>
            <h4><b>Location:</b>   {{$job->location}}</h4>
            <h5><b>Classification:   </b>{{$job->classification}}</h5>
            <h5><b>Work Type:   </b>{{$job->workType}}</h5>
            <h5><b>Created At:   </b>{{$job->created_at}}</h5>
            @endforeach

        </tbody>

          @endif
    </table>

    @endif

</div>

@enddesktop

@mobile

<div class="container">

    <div class="searchresault">
      <center><h2><strong>Recommendations!</strong></h2>
      <p>Here are some recommendations that derive from your preferences...</p></center>
    </div>
    @if(isset($jobs))

    <table class="table table-striped">

        <tbody>
            @if(count($jobs) == 0)

                <h4 style="position:absolute; top:350px; left:550px">Sorry! There are no recommended jobs pertaining to your preferences at the moment...</h4>
                <h4 style="position:absolute; top:370px; left:560px">Check back later to discover potential new jobs in regards to your preferences!</h4>

            @elseif(count($jobs) >= 1)

            @foreach($jobs as $job)
            <center><hr>
            <h4><b><a href="search/{{$job->id}}">{{$job->title}}</a></b></h4>
            <h4><b>Location:</b>   {{$job->location}}</h4>
            <h5><b>Classification:   </b>{{$job->classification}}</h5>
            <h5><b>Work Type:   </b>{{$job->workType}}</h5>
            <h5><b>Posted:   </b>{{$job->created_at}}</h5>
          </center>
            @endforeach

        </tbody>

          @endif
    </table>

    @endif

</div>

@endmobile


@endsection
