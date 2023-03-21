@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    {{--<form method="post" action="/posts/{{$post->id}}">--}}

    {!! Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}

        {{csrf_field()}}

    {{--<input type="hidden" name="_method" value="PUT">

    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">

    <input type="submit" name="submit" value="UPDATE">--}}

    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}

    {!! Form::submit('Update Post',['class'=>"btn btn-info"]) !!}



    {!! Form::close() !!}



    {{--<form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        {{csrf_field()}}
        <input type="submit" value="DELETE">

    </form>--}}

    {!! Form::open(['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}

    {!! Form::submit('Delete Post',['class'=>"btn btn-danger"]) !!}

    {!! Form::close() !!}

@endsection
