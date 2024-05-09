<form action="/posts" method="post" enctype="multipart/form-data" novalidate>
    @csrf
    @include('posts.includes.form', ['buttonText' => 'Create post'])
</form>
