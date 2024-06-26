@extends('layouts.admin_base')
@section('title')
    <title>Список статей</title>
@endsection

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Статьи</h3>

        <div class="mt-8">
            <a href="{{route('posts.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
        </div>

        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Заголовок</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                        </thead>

                        <tbody class="bg-white">
                            @each('admin.one_post_index', $posts, 'post')
                        </tbody>
                    </table>

                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
