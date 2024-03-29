<tr>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900">{{$post->title}}</div>
    </td>

    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
        <a href="{{route('posts.edit', $post)}}" class="text-indigo-600 hover:text-indigo-900">Редактировать</a>

        <form action="{{route('posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-red-900">Удалить</button>
        </form>

    </td>
</tr>

