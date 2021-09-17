@extends('app.template')

@section('content')
    <h1>Attendance</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">Name:{{$post->name}}</a></h3>
                <h3>id no:{{$post->id}}</h3>
                <h3>attended:{{$post->attended}}</h3>
            </div>
        @endforeach
    @else
        <p>No students found</p>
    @endif
@endsection
