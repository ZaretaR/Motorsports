<section class="blog">
    <div class="container">
        <h3>BLOGPOSTS</h3>
        <div class="blog-posts">
            <div class="post">
                @forelse ($posts as $post)
                    @include('posts.includes.post-small', ['post' => $post])
                @empty
                    <p>Geen posts gevonden</p>
                @endforelse
            </div>
            <div class="pagination">
                Previous ... 1 2 3 ... Next
            </div>
        </div>
    </div>
