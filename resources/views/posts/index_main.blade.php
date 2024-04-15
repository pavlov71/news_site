<div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">

    @foreach($posts as $post)
        <div class="px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl">
                <div>
                    @if($posts instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
                        <a href="{{route ('post.show', $post->id)}}">
                            <img src="/storage/posts/{{ $post->thumbnail }}"/>
                        </a>
                    @else
                        <img src="/storage/posts/{{ $post->thumbnail }}"/>
                    @endif
                </div>

                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">{{$post->title}}</h2>

                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {!! $post->preview !!}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    @if($posts instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
        {{ $posts->links() }}
    @endif
</div>
