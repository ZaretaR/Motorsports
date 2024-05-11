<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
        </div>
    </header>

    <section class="blog">
        <div class="container">
            <h3>BLOGPOSTS</h3>
            @if (Auth::check())
                <p class="welkom">Welkom, {{ Auth::user()->username }}</p>
            @endif
            <a href="{{ route('posts.create') }}" class="nieuwe-post">Nieuwe post toevoegen</a> <br>
            <div class="blog-posts">
                <div class="post">
                    @forelse ($posts as $post)
                        @include('posts.includes.post-small', ['post' => $post])
                    @empty
                        <p>Geen posts gevonden</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    @include('includes/footer')
</body>

</html>
