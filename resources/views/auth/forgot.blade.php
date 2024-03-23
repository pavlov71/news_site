@extends('layouts.base')

@section('guest')
@endsection
@section('login')
@endsection

@section('title')
    <title>Восстановление пароля</title>
@endsection

@section('posts')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">

    </div>

    <div class="h-full bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Восстановление пароля</h1>

            <form class="space-y-5 mt-5" method="POST" action="{{ route('forgot-store') }}">
                @csrf

                <input name="email" value="{{ old('email') }}" type="text" class="w-full h-12 border rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />

                @error('email')
                <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <div>
                    <a href="{{ route('login') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Вспомнил пароль</a>
                </div>

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Восстановить</button>
            </form>
        </div>
    </div>

@endsection

@section('footer')
@endsection
