@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/bootstrap/css/bootstrap.min.css') }}" type="text/css" />
@append

<footer class="main-footer">
    <ul class="list-unstyled">
        <li><a href="{{ route('about') }}">About</a></li>
    </ul>
</footer>