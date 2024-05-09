<form action="/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('posts.includes.form', ['buttonText' => 'Post updaten'])
</form>
