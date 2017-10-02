@extends('layouts.app')

@section('content')

@desktop
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('profile::_menu')
            </div>
            <div class="col-sm-9">
                <div class="row">
                  <div class="col-md-13" style="position:relative;right:11px; width:797px;">
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

@enddesktop

@mobile

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('profile::_menu')
        </div>
      <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Preferences</div>
                        <div class="panel-body">
                          <form class="form-horizontal" method="POST" action="{{ route('edit-preferences') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                 <label for="location" class="control-label col-md-3">Location</label>

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
                                 <label for="classification" class="control-label col-md-3">Classification</label>

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
                               <label for="workType" class="control-label col-md-3">Work Type</label>

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
                                    <div class="col-md-8 col-md-offset-2">
                                      <input type="submit" class="btn btn-primary" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



@endmobile

@endsection
