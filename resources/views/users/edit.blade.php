@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Users</div>
                    <div class="panel-body">

                        {!! Form::model($user,array('route'=>['users.update', $user->id],'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('username','Enter Username') !!}
                            {!! Form::text('username',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('firstname','Enter Firstname') !!}
                            {!! Form::text('firstname',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('lastname','Enter Lastname') !!}
                            {!! Form::text('lastname',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email','Enter Email') !!}
                            {!! Form::text('email',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password','Enter Password') !!}
                            {!! Form::text('password',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('location','Enter Location') !!}
                            {!! Form::text('location',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('classification','Enter Classification') !!}
                            {!! Form::text('classification',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('workType','Enter WorkType') !!}
                            {!! Form::text('workType',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                @if ( count( $errors ) > 0 )
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>

@endsection