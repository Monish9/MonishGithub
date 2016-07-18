@extends('layouts/master')

@section('title')
    Blog Index
@endsection

@section('content')
    <div class="body">
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <h3>{{ $post->title }}</h3>
            <span class="subtitle">{{ $post->author }} | {{ $post->created_at->format('M d Y') }}</span>
            <p>{{ $post->body }}</p>
        @endforeach  
    @endif 
    </div>
    <div class="width">&nbsp;
    </div>
   
@endsection