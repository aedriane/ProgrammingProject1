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
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{link_to_route('jobs.show',$job->title,[$job->id])}}</td>
                                    <td>{{$job->Company}}</td>
                                    <td>{{$job->Location}}</td>
                                    <td>{{$job->Classification}}</td>
                                    <td>{{$job->WorkType}}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['jobs.destroy',$job->id],'method'=>'DELETE')) !!}
                                        {{link_to_route('jobs.edit','Edit',[$job->id],['class'=>'btn btn-primary'])}}
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