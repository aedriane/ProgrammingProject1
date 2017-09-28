@extends('layouts.app')

@section('content')
<link href="{{ asset('css/css.css') }}" rel="stylesheet">


@desktop

<div class="container2">

    <div class="searchresault">
      <h2><b>Recommendations...</b></h2>
      <h4>Here are some recommendations that derive from your preferences...</h4>
    </div>
    @if(isset($jobs))

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
            @if(count($jobs) == 0)
            <!--OLD
                <h4 style="position:absolute; top:350px; left:550px">Sorry! There are no recommended jobs pertaining to your preferences at the moment...</h4>
                <h4 style="position:absolute; top:370px; left:560px">Check back later to discover potential new jobs in regards to your preferences!</h4>
            -->
            <h4 style="position:relative;left:10px">Sorry! There are no recommended jobs pertaining to your preferences at the moment...</h4>
            <h4 style="position:relative;left:10px">Check back later to discover potential new jobs in regards to your preferences!</h4>   
            
            @elseif(count($jobs) > 1)
            @foreach($jobs as $job)
            <tr>
                <td><a href="search/{{$job->id}}">{{$job->title}}</td></a>
                <td>{{$job->location}}</td>
                <td>{{$job->classification}}</td>
                <td>{{$job->workType}}</td>
                <td>{{$job->posted}}</td>
            </tr>
            @endforeach

            @foreach($details as $queried)
            <hr>
            <h4><b><a href="search/{{$queried->id}}">{{$queried->title}}</a></b></h4>
            <h4><b>Location:</b>   {{$queried->location}}</h4>
            <h5><b>Classification:   </b>{{$queried->classification}}</h5>
            <h5><b>Work Type:   </b>{{$queried->workType}}</h5>
            <h5><b>Created At:   </b>{{$queried->created_at}}</h5>
            @endforeach
            
        </tbody>

          @endif
    </table>

    @endif

</div>

@enddesktop

@mobile

<div class="container">

    <center><h4><b>Recommendations!</b></h4><center>
    <p>Here are some recommendations that</br>derive from your preferences...</p>
    @if(isset($jobs))

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
            @if(count($jobs) > 1)

            @foreach($jobs as $job)
            <tr>
                <td><a href="search/{{$job->id}}">{{$job->title}}</td></a>
                <td>{{$job->location}}</td>
                <td>{{$job->classification}}</td>
                <td>{{$job->workType}}</td>
                <td>{{$job->posted}}</td>
            </tr>
            @endforeach

            @foreach($details as $queried)
            <hr>
            <h4><b><a href="search/{{$queried->id}}">{{$queried->title}}</a></b></h4>
            <h4><b>Location:</b>   {{$queried->location}}</h4>
            <h5><b>Classification:   </b>{{$queried->classification}}</h5>
            <h5><b>Work Type:   </b>{{$queried->workType}}</h5>
            <h5><b>Created At:   </b>{{$queried->created_at}}</h5>
            @endforeach

        </tbody>
    </table>

</div>

        @elseif(count($jobs) == 0)
            <p style="position:relative; "><!--top:350px-->Sorry! There are no recommended jobs pertaining to your preferences at the moment...</p>
            <p style="position:relative; "><!--top:410px-->Check back later to discover potential new jobs in regards to your preferences!</p>

        @endif

      @endif

@endmobile


@endsection
