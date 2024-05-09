<article class="post-small">
    <h1>
        <a href="/posts/{{ $post->id }}">{{ $post->title }}">
            {{ $post->title }}
        </a>
    </h1>
    <p>{{ $post->created_at }}</p>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <div class="post-small-description">
        @if (strlen($post->description) > 100)
            {{ substr($post->description, 0, 100) }}...
        @else
            {{ $post->description }}
        @endif
    </div>
    <footer>
        <a href="/posts/{{ $post->id }}">Lees verder &rarr;</a>
    </footer>
</article>
