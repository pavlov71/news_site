@extends('layouts.base')
@section('title')
    @if($pagination)
        <title>Новости</title>
    @else
    <title>Главная страница</title>
    @endif
@endsection
@section('posts')
    @unless($pagination)
        <a href="{{route('index-posts')}}" class="border text-fuchsia-700 text-2xl">Cписок всех новостей</a>
    @endunless

    @include('posts.index_main', ['posts' => $posts, 'pagination' => $pagination])
@endsection
