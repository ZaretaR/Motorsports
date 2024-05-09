<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>

    <section class="post-details">
        <header class="post-header">
            <h2 class="post-title">{{ $post->title }}</h2>
            <p>{{ $post->created_at }}</p>
            <img src="{{ $post->image }}" alt="{{ $post->title }}">
            <p class="post-description">{{ $post->description }}</p>
            <button>Lees verder</button>
        </header>

        <div class="post-actions">
            <a href="{{ route('posts.edit', $post->id) }}">Post bewerken</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="Post verwijderen">
            </form>
        </div>

        <aside class="comments">
            <h3>Comments</h3>
            <p>{{ $post->comments }}</p>
            <p>{{ $post->likes }}</p>
        </aside>

    </section>

</body>

</html>
