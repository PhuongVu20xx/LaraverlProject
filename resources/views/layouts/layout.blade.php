<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>
<body>
    <div class="container.d-none">
        <div id="header">
            @yield('header')
            @yield('landingnav')
        </div>
        <div class="row">
            @yield('body')
            <div class="col">
                @yield('menu')
            </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
        <div id="footer">
            @yield('footer')
        </div>
    </div>

<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
@yield('javascript')
</body>
</html>