@extends('layouts/admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}" type="text/css">
    
@endsection

@section('content')
    <div class="container">
    @include('includes/info-box')
    <form action="{{ route('admin/blog/post/create') }}" method="post">
        <div class="input-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" {{ $errors->has('title') ? 'class=has-error' : '' }} />
        </div>
        <div class="input-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" {{ $errors->has('author') ? 'class=has-error' : '' }} />
        </div>
        <div class="input-group">
            <label for="category_select">Add Categories</label>
            <select name="category_select" id="category_select">
                <option value="Dummy id">Dummy Category ID</option>
            </select>
        
        <button type="button" class="btn">Add Category</button>
        <div class="added-categories">
            <ul></ul>
        </div>
        <input type="hidden" name="categories" id="categories">
        </div>
         <div class="input-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="12" {{ $errors->has('body') ? 'class=has-error' : '' }}></textarea>
        </div>
        <button type="submit" class="btn">Create Post</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}" />
    </form>    
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::secure('src/js/posts.js') }} "></script>
@endsection