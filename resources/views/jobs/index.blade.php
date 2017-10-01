@extends('admin.layout.auth')

@section('content')

@desktop
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(Session::has('message'))
                    <div class="alert alert-success"> {{Session::get('message') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Jobs</div>
                    <div class="panel-body">
                        <table class ="table">
                            <tr>
                                <th>Title</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th>Classification</th>
                                <th>WorkType</th>
                            </tr>
                                @foreach($jobs as $jobs)
                                <tr>
                                    <td>{{link_to_route('jobs.show',$jobs->title,[$jobs->id])}}</td>
                                    <td>{{$jobs->company}}</td>
                                    <td>{{$jobs->location}}</td>
                                    <td>{{$jobs->classification}}</td>
                                    <td>{{$jobs->workType}}</td>
                                    <td>
                                      {!! Form::open(array('route'=>['jobs.destroy',$jobs->id],'method'=>'DELETE')) !!}
                                      {{link_to_route('jobs.edit','Edit',[$jobs->id],['class'=>'btn btn-primary'])}}
                                      |

                                      {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                      {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                {{link_to_route('jobs.create','Add Job',null,['class'=>'btn btn-success'])}}
            </div>
        </div>
    </div>

@enddesktop

@mobile


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
                <div class="alert alert-success"> {{Session::get('message') }}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Jobs</div>
                <div class="panel-body">

                            @foreach($jobs as $job)
                              <hr>
                              <h3><b>{{link_to_route('jobs.show',$job->title,[$job->id])}}</a></b></h3>
                              <h4><b>Location:   </b>{{$job->location}}</h4>
                              <h5><b>Classification:   </b>{{$job->classification}}</h5>
                              <ul style="position:relative; text-align:left; list-style-position:outside">
                                <h5><b>Work Type:   </b>{{$job->workType}}</h5>
                                <h5><b>Created At:   </b>{{$job->created_at}}</h5>
                              </ul>
                            {{link_to_route('jobs.edit','Edit',[$job->id],['class'=>'btn btn-primary'])}}
                            |
                            {{ Form::open(array('route'=>['jobs.destroy',$job->id],'method'=>'DELETE')) }}
                            {{ Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) }}
                            {{ Form::close() }}

                            @endforeach

                            {!! $jobs->render() !!}

                </div>
            </div>
                {{link_to_route('jobs.create','Add Job',null,['class'=>'btn btn-success'])}}
        </div>
    </div>
</div>


@endmobile

@endsection
