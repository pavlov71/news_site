@extends('layouts.admin_base')

@section('title')
    <title>Редактирование статьи  #{{$post->id}}</title>
@endsection

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Изменить статью</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{route('posts.update', $post)}}">
                @csrf
                @method('PATCH')

                <input name="title" type="text"
                       class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror"
                       placeholder="Название" value="{{$post->title}}"/>
                @error('title')
                <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <input name="preview" type="text"
                       class="w-full h-12 border border-gray-800 rounded px-3 @error('preview') border-red-500 @enderror"
                       placeholder="Кратко" value="{{$post->preview}}"/>
                @error('preview')
                <p class="text-red-500"> {{ $message }} </p>
                @enderror


                <input name="description" type="text"
                       class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-500 @enderror"
                       placeholder="Описание" value="{{$post->description}}"/>
                @error('description')
                <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <div>
                    <img class="h-64 w-64" src="/storage/posts/{{ $post->thumbnail }}" alt="">
                </div>

                <input name="thumbnail" type="file" class="w-full h-12 @error('title') border-red-500 @enderror"
                       placeholder="Обложка" value="{{$post->thumbnail}}"/>
                @error('thumbnail')
                <p class="text-red-500"> {{ $message }} </p>
                @enderror


                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                    Сохранить
                </button>
            </form>
        </div>
    </div>

@endsection
