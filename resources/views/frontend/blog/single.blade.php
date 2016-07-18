@extends('layouts/master')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <span class="subtitle">{{ $post->author }} | {{ $post->created_at->format('M d Y') }}</span>
        <p>{{ $post->body }}</p>
    </article>

@endsection