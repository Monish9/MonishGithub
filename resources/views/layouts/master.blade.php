<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        
        <link rel="stylesheet" href="{{ URL::to('src/css/main.css')}}">
        <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
    </head>
    <body>
        @include('includes/header')
        <div id="container-fluid">
            @yield('content')
        </div>
        @include('includes/footer')
        <script type="text/javascript" src="{{ URL::to('src/js/jquery.min.js') }}"></script>
        <!--script type="text/javascript" src="{{ URL::to('src/js/jquery.pjax.js') }}"></script-->
        <script type="text/javascript" src="{{ URL::to('src/js/posts.js') }}"></script>
        
    </body>
</html>