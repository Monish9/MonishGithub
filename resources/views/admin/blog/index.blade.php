@extends('layouts/admin-master')

@section('content')
    <div class="container">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <section>
                    <h1>{{ $post->title }}</h1>
                    <span>{{ $post->author }}</span>
                </section>
                <section>
                    <a href="{{ Route('admin/blog/post/', ['post_id' => $post->id, 'end' => 'admin']) }}">View</a>
                    <a href="{{ Route('admin/blog/post/edit', ['post_id' => $post->id]) }}">Edit</a>
                    <a class="delete" href="{{ Route('admin/blog/post/delete', ['post_id' => $post->id]) }}">Delete</a>
                </section>
            @endforeach
        @endif
    </div>
    </div>
    <div class="pagination_posts">
            @if($posts->lastPage() > 1)
                <section >
                    @if($posts->currentPage() != 1)
                        <a href="{{ $posts->previousPageUrl() }}"><i class="glyphicon glyphicon-backward"></i></a>
                    @endif
                    @if($posts->currentPage() != $posts->lastPage())
                        <a href="{{ $posts->nextPageUrl() }}"><i class="glyphicon glyphicon-forward"></i></a>
                    @endif
                </section>
            @endif
        </div>
@endsection