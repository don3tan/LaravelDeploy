@extends('layouts.layout')

@section('content')

    <div>

        <h2>
            This is my Index Page.
        </h2>

        @foreach($posts as $post)
            <div class='jumbotron'>
                <a href="/post/{{$post->id}}/edit"><h1>{{$post->title}}</h1></a>
                <small>Created on {{$post->created_at}}</small>
                {!!Form::open(["action"=>['PostController@destroy',$post->id],'method'=>'Post'])!!}
                {{Form::hidden('_method','Delete')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
            
        @endforeach
    </div>
    


@endsection