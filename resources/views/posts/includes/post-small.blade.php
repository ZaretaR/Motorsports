<article class="post-small">
    <span class="aantal-likes">{{ $post->likes()->count() }}</span>
    @if (auth()->user() &&
            $post->likes()->where('user_id', auth()->user()->id)->exists())
        <i class="fa-solid fa-heart" style="color: #ffc72c;"></i>
    @else
        <i class="fa-regular fa-heart" style="color: #ffc72c;"></i>
    @endif
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->created_at }}</p>
    <img style="max-width:500px" src="{{ asset('images/' . $post->picture) }}">
    <div class="post-small-description">
        @if (strlen($post->description) > 100)
            {{ substr($post->description, 0, 100) }}...
        @else
            {{ $post->description }}
        @endif
    </div>

    <a href="/posts/{{ $post->id }}" class="italic">Lees verder &rarr;</a>

    @if (auth()->user())
        @if ($post->likes()->where('user_id', auth()->user()->id)->exists())
            <form action="{{ route('posts.unlike', $post) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Unlike</i></button>
            </form>
        @else
            <form action="{{ route('posts.like', $post) }}" method="post">
                @csrf
                <button type="submit">Like</button>
            </form>
        @endif
    @endif
</article>
