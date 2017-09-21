@extends('layouts.app')

@section('content')
<link href="{{ asset('css/css.css') }}" rel="stylesheet">

<div class="container2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="panel-heading title">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="sectiontitle">
                          <p class="sectionname">User Details</p>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="inputbna">Username</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control input1" name="username" value="{{ old('username') }}" required>

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="inputbna">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control input1" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="inputbna">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control input1" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="inputbna">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control input1" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="inputbna">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input1" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="inputbna">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input1" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="sectiontitle">
                          <p class="sectionname">Preferences</p>
                        </div>

                        <div class="form-group">
                         <label for="location" class="inputbna">Location</label>

                         <div class="col-md-6">
                           <select id="location" name="location" class="form-control input1" placeholder="Select Location">
                                  <option value='NULL'>Select Location</option>
                                   @foreach($locations as $loc)
                                   <option value="{{$loc->location}}">{{$loc->location}}</option>
                                   @endforeach
                           </select>
                         </div>
                     </div>

                        <div class="form-group">
                          <label for="classification" class="inputbna">Classification</label>

                          <div class="col-md-6">
                            <select id="classification" name="classification" class="form-control input1">
                                   <option value='NULL'>Select Classification</option>
                                    @foreach($classifications as $cla)
                                    <option value="{{$cla->classification}}">{{$cla->classification}}</option>
                                    @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="workType" class="inputbna">Work Type</label>

                        <div class="col-md-6">
                          <select id="workType" name="workType" class="form-control input1">
                                 <option value='NULL'>Select Classification</option>
                                  @foreach($workTypes as $work)
                                  <option value="{{$work->workType}}">{{$work->workType}}</option>
                                  @endforeach
                          </select>
                        </div>
                    </div>



                        <div class="form-group">
                            <div class="butnlink">
                                <button type="submit" class="btn btn-primary button1">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
