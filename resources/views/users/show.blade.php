@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$user->username}}</div>
                    <div class="panel-body">

                        {{$user->firstname}}
                        {{$user->lastname}}
                        {{$user->email}}
                        {{$user->password}}
                        {{$user->location}}
                        {{$user->classification}}
                        {{$user->workType}}
                    </div>

        </div>
    </div>
        </div>
    </div>

@endsection