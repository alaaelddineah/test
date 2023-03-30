<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel=" shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css')}}" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    <title>Responsive landing page headphones</title>
</head>
<body>
<!--=============== HEADER ===============-->
@include('include.header')
 @yield('content')

<!--=============== FOOTER ===============-->
@include('include.footer')

<!--=============== SCROLL UP ===============-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-s-line scrollup__icon"></i>
</a>

<!--=============== SCROLL REVEAL ===============-->
<script src="{{asset('https://unpkg.com/scrollreveal')}}"></script>

<!--=============== MAIN JS ===============-->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
