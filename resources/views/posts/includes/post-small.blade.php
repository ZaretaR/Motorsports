<article class="post-small">
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
</article>
