<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
        </div>
    </header>

    <div class="back">
        <a href="{{ route('posts.index') }}"><i class="fa-solid fa-chevron-left" style="color: #2c2c2c;"></i> Terug</a>
    </div>

    <section class="post-formulier">
        <div>
            <p class="likes-show">{{ $post->likes()->count() }} Likes</p>
            <h2 class="post-title">{{ $post->title }}</h2>
            <p>{{ $post->created_at }}</p>
            <img style="max-width:200px" src="{{ Storage::url('images/' . $post->image) }}">
            <p class="post-description">{{ $post->description }}</p>
            <div class="post-buttons">
                <a class="bewerken" href="{{ route('posts.edit', $post->id) }}">Bewerken</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post" enctype="multipart/form-data">
                    @method('delete')
                    @csrf
                    <button class="verwijderen" type="submit">Verwijderen</button>
                </form>
            </div>
        </div>
    </section>
    @include('includes/footer')

</body>

</html>
