@extends('app.template')

@section('content')
   <a href="/posts"class="btn btn-defult">Go Back</a>
   <h1>{{$post->name}}</h1>
   <div>
       {!!$post->attended!!}
   </div>
   @if(!Auth::guest())
   <a href="/posts/{{$post->id}}/edit" class="btn btn-defult">Edit</a>
   {!! Form::open(['action' =>['PostsController@destroy',$post->id],'method' =>'POST','class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::text('Delete','',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
@endsection
