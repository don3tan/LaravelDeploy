@extends('layouts.layout')

@section('content')

    <div class="container">

        {!!Form::open(["action"=>['PostController@update',$post->id],'method'=>'Post'])!!}
        <div class='form-group'>
            {{Form::Label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title of Post'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body','Body')}}
            {{Form::text('body',$post->body,['class'=>'form-control','placeholder'=>'Body'])}}
        </div>
            {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!!Form::close()!!}

        
    </div>    

@endsection