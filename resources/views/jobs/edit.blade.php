@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Job</div>
                    <div class="panel-body">

                      {!! Form::model($jobs,array('route'=>['jobs.update', $jobs->id],'method'=>'PUT')) !!}

                        <div class="form-group">
                            {!! Form::label('title','Enter Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('company','Enter Company') !!}
                            {!! Form::text('company',null,['class'=>'form-control'])!!}
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
                            {!! Form::label('description','Enter Job Description') !!}
                            {!! Form::textarea('description',null,['class'=>'form-control'])!!}
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
