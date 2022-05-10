<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('css')
    <link rel="stylesheet" href="{{asset('css\bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>
<body>
    <div id="container">
        <div id="header">
            @yield('header')
            @yield('landingnav')
        </div>
        <div id="body">
            @yield('landingpage')
            @yield('body')
            <div id="menu">
                @yield('menu')
            </div>
            <div id="content">
                @yield('content')
            </div>
        </div>
        <div id="footer">
            @yield('footer')
        </div>
    </div>

<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>