@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('profile::_menu')
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Preferences</div>
                            <div class="panel-body">
                              <form class="form-horizontal" method="POST" action="{{ route('edit-preferences') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                     <label for="location" class="col-md-4 control-label">Location</label>

                                     <div class="col-md-6">
                                       <select id="location" name="location" class="form-control" placeholder="Select Location">
                                              <option value='NULL'>Select Location</option>
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
                                              <option value='NULL'>Select Classification</option>
                                               @foreach($classifications as $cla)
                                               <option value="{{$cla->classification}}">{{$cla->classification}}</option>
                                               @endforeach
                                       </select>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                   <label for="workType" class="col-md-4 control-label">Work Type</label>

                                   <div class="col-md-6">
                                     <select id="workType" name="workType" class="form-control">
                                            <option value='NULL'>Select Work Type</option>
                                             @foreach($workTypes as $wor)
                                             <option value="{{$wor->workType}}">{{$wor->workType}}</option>
                                             @endforeach
                                     </select>
                                   </div>
                               </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                          <input type="submit" class="btn btn-primary" value="Save Changes">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
