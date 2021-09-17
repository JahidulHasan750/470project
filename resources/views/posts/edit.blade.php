@extends('app.template')

@section('content')
    <h1>Add new Student</h1>
    {!! Form::open(['action' =>['PostsController@update',$post->id],'method' =>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$post->name,['class'=>'form-control','placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('attended','Attended')}}
            {{Form::text('attended',$post->attended,['class'=>'form-control','placeholder'=>'Attended'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!!Form::close() !!}
@endsection
