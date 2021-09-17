@extends('app.template')

@section('content')
    <h1>Add new Student</h1>
    {!! Form::open(['action' =>'PostsController@store','method' =>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('attended','Attended')}}
            {{Form::text('attended','',['class'=>'form-control','placeholder'=>'Attended'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!!Form::close() !!}
@endsection
