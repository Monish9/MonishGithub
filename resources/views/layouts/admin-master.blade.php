<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Area</title>
        <link rel="stylesheet" href="{{ URL::to('src/css/admin.css')}}">
        <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap/css/bootstrap.css')}}">
        @yield('styles')
    </head>
    <body>
        @include('includes/admin-header')
        <div>
            @yield('content')
            
        </div>
       <script type="text/javascript" src="{{ URL::to('src/js/jquery.min.js') }}" /></script>
       <script type="text/javascript" src="{{ URL::to('src/js/admin.js') }}"></script>
        
    </body>
</html>