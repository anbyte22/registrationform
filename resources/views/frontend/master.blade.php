<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon -->
    <title>AAHAR FOOD</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">


    <!-- Custom fonts for this template-->
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <!----#Header------>
    <div class="header">

        <h2 class="maintitle">Visitor Registration</h2>
        <div class="slider-header">
            <img src="{{ asset('public/frontend/images/slider/banner.jpg') }}" alt="">
        </div>

        <div class="clearfix"></div>
        @yield('body')
        <div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="copyright-text ">
                        Copyright © 2021 AAHAR FOOD. All Rights Reserved.

                    </div>

                </div>
            </div>
        </div>
        <!-- .site-info -->
    </div>
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>

</body>

</html>
