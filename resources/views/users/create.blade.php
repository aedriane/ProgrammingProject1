@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>
                    <div class="panel-body">

                        {!! Form::open(array('route'=>'users.store')) !!}
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
                         <label for="location" class="col-md-3 control-label">Location</label>

                         <div class="col-md-3">
                           <select id="location" name="location" class="form-control" placeholder="Select Location">
                                  <option value='NULL'>Select Location</option>
                                   @foreach($locations as $loc)
                                   <option value="{{$loc->location}}">{{$loc->location}}</option>
                                   @endforeach
                           </select>
                         </div>
                       </div>

                       <div class="form-group">
                         <label for="classification" class="col-md-3 control-label">Classification</label>

                         <div class="col-md-3">
                           <select id="classification" name="classification" class="form-control">
                                  <option value='NULL'>Select Classification</option>
                                   @foreach($classifications as $cla)
                                   <option value="{{$cla->classification}}">{{$cla->classification}}</option>
                                   @endforeach
                           </select>
                         </div>
                     </div>

                     <div class="form-group">
                       <label for="workType" class="col-md-3 control-label">Work Type</label>

                       <div class="col-md-3">
                         <select id="workType" name="workType" class="form-control">
                                <option value='NULL'>Select Work Type</option>
                                 @foreach($workTypes as $wor)
                                 <option value="{{$wor->workType}}">{{$wor->workType}}</option>
                                 @endforeach
                         </select>
                       </div>
                   </div>

                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                @if ( count( $errors ) > 0 )
                    <ul class="aler alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
            </ul>
                        @endif
            </div>
        </div>
    </div>

@endsection
