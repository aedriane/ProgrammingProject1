@extends('admin.layout.auth')

@section('content')
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

@endsection
