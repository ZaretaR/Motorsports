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

            <div class="back">
                <a href="{{ route('posts.show', $post->id) }}">
                    <i class="fa-solid fa-chevron-left" style="color: #2c2c2c;">
                    </i>Terug
                </a>
            </div>

            <section class="post-formulier">
                <form action="/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @include('posts.includes.form')
                </form>
            </section>

            @include('includes/footer')
</body>

</html>
