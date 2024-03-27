<!DOCTYPE html>
<html lang="">
<head>
    @section('header')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')
        <script src="https://cdn.tailwindcss.com"></script>
    @show

</head>
<body>
@section('guest')
    @guest('web')
        <a href="{{ route('login') }}"
           class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
    @endguest
@endsection

@section('login')
    @auth('web')
        <a href="{{ route('logout') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
    @endauth
@endsection

@section('nav')
    <nav
        class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0 inner">
            <a href="/" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Laravel
                с нуля</a><br>
            <span class="text-xs text-grey-dark">Уроки от CutCode</span>
        </div>

        <div class="sm:mb-0 self-center">
            @yield('guest')
            @yield('login')
        </div>
    </nav>
@show

@section('posts')
@show

@section('footer')
    <div>
        <a href="{{route('feedback')}}" class="border text-fuchsia-700 text-2xl">
            Обратная связь
        </a>
    </div>
@show
</body>
</html>
