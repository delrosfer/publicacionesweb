@props(['post' => $post])

<div class="mb-4 rounded-lg bg-gradient-to-r from-emerald-200 to-emerald-400">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-2">{{ $post->body }}</p>

    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 text-bold">Eliminar</button>
        </form>
    @endcan

    <div class="flex items-center">
        @auth
            @if(!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-600 text-bold">Me gusta</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-600 text-bold">No me gusta</button>
                </form>
            @endif

            
        @endauth

        <span>{{ $post->likes->count() }} {{ Str::plural('Like', $post->likes->count()) }}</span>
    </div>
</div>