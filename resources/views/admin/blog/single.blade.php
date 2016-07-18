@extends('layouts/admin-master')

@section('content')
    <div class="container">
        <section id="admin-post">
            <a href="{{ Route('admin/blog/post/edit', ['post_id' => $post->id]) }}">Edit Post</a>
            <a class="delete" href="{{ Route('admin/blog/post/delete', ['post_id' => $post->id]) }}">Delete Post</a>
        </section>
        <section>
            <h1>{{ $post->title }}</h1>
            <span>{{ $post->author }}</span>
            <p>{{ $post->body }}</p>
        </section>
    </div>
@endsection
