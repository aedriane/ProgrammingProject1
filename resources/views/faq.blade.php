@extends('layouts.app')

@section('content')

@desktop


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>FAQs</h1></div>

                <div class="panel-body">
                    <p>This is a dekstop site </p>
                </div>
            </div>
        </div>
    </div>
</div>


@enddesktop




@mobile

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>FAQs</h1></div>

                <div class="panel-body">
                    <p>This is a mobile site </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endmobile






@endsection
