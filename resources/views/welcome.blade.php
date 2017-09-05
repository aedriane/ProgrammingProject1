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
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->location}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>


@endsection
