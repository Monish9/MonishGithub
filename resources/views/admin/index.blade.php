@extends('layouts/admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/modal.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::secure('src/css/bootstrap/css/bootstrap.min.css') }}" type="text/css">
@endsection



@section('content')
    <div class="container2">
        @include('includes/info-box')
        <div class="card">
            <header>
                <ul>
                    <li><a href="{{ Route('admin/blog/post/create') }}" class="btn">New Post</a></li>
                    <li><a href="{{ Route('admin/blog/index') }}" class="btn">Show All Posts</a></li>
                </ul>
            </header>
            <section>
                <ul>
                    @if(count($posts) == 0)
                        <li>No Posts</li>
                    @else
                        @foreach($posts as $post)
                            <li>
                                <article>
                                    <div class="post-info">
                                        <h3>{{ $post->title }}</h3>
                                        <span class="info">{{ $post->author }} | {{ $post->created_at->format('M d Y') }}</span>
                                    </div>
                                    <div class="edit">
                                        <ul>
                                            <li><a href="{{ Route('admin/blog/post/', ['post_id' => $post->id, 'end' => 'admin']) }}">View Post</a></li>
                                            <li><a href="{{ Route('admin/blog/post/edit', ['post_id' => $post->id]) }}">Edit</a></li>
                                            <li><a class="delete" href="{{ Route('admin/blog/post/delete', ['post_id' => $post->id]) }}" class="danger">Delete</a></li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    @endif 
                </ul>
            </section>
        </div>
       
      
        <div class="pagination">
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
        
    </div>
      <div class="card">
            <header>
                <ul>
                    <li><a href="" class="btn">New Post</a></li>
                    <li><a href="" class="btn">Show All Messages</a></li>
                </ul>
            </header>
            <section>
                <ul>
                    <li>No Posts</li>
                    <li>
                        <article data-message="body" data-id="ID">
                            <div class="message-info">
                                <h3>Message Subject</h3>
                                <span class="info">Sender.. | Date</span>
                            </div>
                            <div class="edit">
                                <ul>
                                    <li><a href="">View</a></li>
                                    <li><a href="" class="danger">Delete</a></li>
                                </ul>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
     
    
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}"
    </script>
    <script type="text/javascript" src="{{ URL::secure('src/js/modal.js') }}"></script>
    <script type="text/javascript" src="{{ URL::secure('src/js/contact_messages.js') }}"></script>
@endsection