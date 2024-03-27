@extends('layouts.base')

@section('footer')
@endsection

@section('title')
    <title>Обратная связь</title>
@endsection

@section('posts')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">

    </div>

    <div class="h-full bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Свяжитесь с нами</h1>

            <form class="space-y-5 mt-5" method="POST" action="{{route('feedback-store')}}">
                @csrf
                <input name="email" value="{{old('email')}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />

                @error('email')
                <p class="text-red-500">{{$message}}</p>
                @enderror

                <input name="content" value="{{old('content')}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('content') border-red-500 @enderror" placeholder="Сообщение" />

                @error('content')
                <p class="text-red-500">{{$message}}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Написать</button>
            </form>
        </div>
    </div>

@endsection
