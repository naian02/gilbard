<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BRZL Agencia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link href="frontend/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
        <!-- All css files are included here. -->
        <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="frontend/css/qanto.css">
        <link rel="stylesheet" href="frontend/css/bauhaus93.css">
        <link rel="stylesheet" href="frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="frontend/css/icofont.min.css">
        <link rel="stylesheet" href="frontend/css/plugins.css">
        <link rel="stylesheet" href="frontend/css/helper.css">
        <link rel="stylesheet" href="frontend/css/style.css">   
        <!-- Modernizr JS -->
        <script src="frontend/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div id="main-wrapper">
            @include('layouts.frontend.common.header')
            <!--Landing contents-->
            
            @yield('home')
            @yield('login')
            @yield('register')
            <!--Landing contents End-->
            @include('layouts.frontend.common.footer')
        </div>
    <!-- All jquery file included here -->
    <script src="frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="frontend/js/popper.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/plugins.js"></script>
    <script src="frontend/js/main.js"></script>
    </body>
</html>
