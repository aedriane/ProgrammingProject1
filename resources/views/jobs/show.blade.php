@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$jobs->title}}</div>
                    <div class="panel-body">

                        {{$jobs->company}}
                        {{$jobs->location}}
                        {{$jobs->classification}}
                        {{$jobs->workType}}
                        {{$jobs->description}}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection