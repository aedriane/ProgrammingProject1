@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 personal-info">
            <h3>User Profile -- {{$user->username}}</h3></br>

            <form class="form-horizontal" method="POST" action="{{ route('profile') }}">
                 {{ csrf_field() }}
                 @if (isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <center><div class="form-group">
                    <div class="col-lg-8">
                        <h3>Your details</h3>
                    </div>
                </div></center>

                <div class="form-group">
                    <label class="col-lg-3 control-label">First Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{$user->firstname}}" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{$user->lastname}}" name="lastname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" value="" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" value="" name="password_confirmed">
                    </div>
                </div>

                <center><div class="form-group">
                    <div class="col-lg-8">
                        <h3>Your preferences</h3>
                    </div>
                </div></center>

                <div class="form-group">
                 <label for="location" class="col-md-4 control-label">Location</label>

                 <div class="col-md-6">
                   <select id="location" name="location" class="form-control" placeholder="Select Location">
                          <option value='{{$user->location}}'>Select Location</option>
                           @foreach($locations as $loc)
                           <option value="{{$loc->location}}">{{$loc->location}}</option>
                           @endforeach
                   </select>
                 </div>
             </div>

             <div class="form-group">
               <label for="classification" class="col-md-4 control-label">Classification</label>

               <div class="col-md-6">
                 <select id="classification" name="classification" class="form-control">
                        <option value='{{$user->classification}}'>Select Classification</option>
                         @foreach($classifications as $cla)
                         <option value="{{$cla->classification}}">{{$cla->classification}}</option>
                         @endforeach
                 </select>
               </div>
           </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
