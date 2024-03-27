@extends('layouts.base')
@section('title')
        <title>{{$post->title}}</title>
@endsection
@section('posts')
    @include('posts.show', ['post' => $post])
@endsection
