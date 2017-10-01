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
                    <div class="panel-heading">Users</div>
                    <div class="panel-body">
                     <table class ="table">
                         <tr>
                             <th>Username</th>
                             <th>Firstname</th>
                             <th>Lastname</th>
                             <th>Email</th>
                         </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{link_to_route('users.show',$user->username,[$user->id])}}</td>
                                <td>{{$user->firstname}}</td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    {!! Form::open(array('route'=>['users.destroy',$user->id],'method'=>'DELETE')) !!}
                                    {{link_to_route('users.edit','Edit',[$user->id],['class'=>'btn btn-primary'])}}
                                    |

                                    {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                     </table>
                    </div>
                </div>
                {{link_to_route('users.create','Add User',null,['class'=>'btn btn-success'])}}
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
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                  @foreach($users as $user)
                    <hr>
                    <h3><b>{{link_to_route('users.show',$user->username,[$user->id])}}</a></b></h3>
                    <h5><b>First Name:   </b>{{$user->firstname}}</h5>
                    <h5><b>Last Name:   </b>{{$user->lastname}}</h5>
                      <h5><b>Email:   </b>{{$user->email}}</h5>
                      <h5><b>Created At:   </b>{{$user->created_at}}</h5>
                  {{link_to_route('users.edit','Edit',[$user->id],['class'=>'btn btn-primary'])}}
                  |
                  {{ Form::open(array('route'=>['users.destroy',$user->id],'method'=>'DELETE')) }}
                  {{ Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) }}
                  {{ Form::close() }}

                  @endforeach

                  {!! $users->render() !!}
                </div>
            </div>
            {{link_to_route('users.create','Add User',null,['class'=>'btn btn-success'])}}
        </div>
    </div>
</div>

@endmobile

@endsection
