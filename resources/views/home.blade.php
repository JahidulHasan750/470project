@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create" class="btn btn-primary">Add New Student</a>
                        <h3>Your students</h3>
                        @if(count($posts)>0)
                        <table class="table table-stripped">
                            <tr>
                                <th>Student Name  Student Id</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->name}}</td>
                                    <td>{{$post->id}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-defult">Edit</a></a></td>
                                    <td>
                                        {!! Form::open(['action' =>['PostsController@destroy',$post->id],'method' =>'POST','class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::text('Delete','',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                    </tr>
                                    @endforeach
                        </table>
                        @else
                            <p>You have no Students</p>
                        @endif
                                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
