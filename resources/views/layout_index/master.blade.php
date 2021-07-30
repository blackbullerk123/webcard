<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Novena- Health & Care Medical template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('novena/images/favicon.ico') }}" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('novena/plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('novena/plugins/icofont/icofont.min.css') }}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{ asset('novena/plugins/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('novena/plugins/slick-carousel/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('novena/css/style.css') }}">

</head>

<body id="top">
    @include('layout_index.header')
    @yield('content')
    @include('layout_index.footer')
    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{ asset('novena/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('novena/plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('novena/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('novena/plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('novena/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('novena/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    
    <script src="{{ asset('novena/plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('novena/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ asset('novena/plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="{{ asset('novena/js/script.js') }}"></script>
    <script src="{{ asset('novena/js/contact.js') }}"></script>

  </body>
  </html>
   