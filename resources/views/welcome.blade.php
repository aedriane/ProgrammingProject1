@extends('layouts.app')

@section('content')


@desktop


<div class="container">

    <h3>Recommendations!</h3>
    <p>Here are some recommendations that derive from your preferences...</p>

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
                <h4 style="position:absolute; top:350px; left:550px">Sorry! There are no recommended jobs pertaining to your preferences at the moment...</h4>
                <h4 style="position:absolute; top:370px; left:560px">Check back later to discover potential new jobs in regards to your preferences!</h4>

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
        </tbody>

          @endif
    </table>

    @endif

</div>

@enddesktop

@mobile

<div class="container">

    <center><h3>Recommendations!</h3><center></br>
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
        </tbody>
    </table>

</div>

        @elseif(count($jobs) == 0)
            <h4 style="position:absolute; top:350px">Sorry! There are no recommended jobs pertaining to your preferences at the moment...</h4>
            <h4 style="position:absolute; top:410px">Check back later to discover potential new jobs in regards to your preferences!</h4>

        @endif

      @endif

@endmobile


@endsection
