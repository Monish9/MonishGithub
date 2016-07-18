<!DOCTYPE HTML>
<html>
<head>
<title>mypage</title>
</head>
<body>
    @include('includes/header')
    <div style="width:100%;height:60px;background:#333;display:block;"></div>
    
    @yield('main_content')
    
    @include('includes/footer')

</body>
</html>