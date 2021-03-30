<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('frontend/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset ('frontend/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <style>
      .tombol{
        /*ubah warna background*/
        background-color: Transparent;
        /*ubah warna tulisan*/
        color: #ffffff;
        /*atur border*/
        border: 2px solid #ffffff;
        /*atur sudut border*/
        border-radius: 20px;
        /*membuat efek bayangan*/
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.2);
        /*teks rata tengah*/
        text-align: center;
        /*ubah jarak margin/luar*/
        margin: 5px 2px;
        /*ubah jarak padding/dalam*/
        padding: 10px 15px;
        /*ubah tampilan kursor ketika berada diatas elemen*/
        cursor: pointer;
      }
      .tombol:hover{
        /*ubah warna background ketika kursor berada diatas elemen*/
        background-color: #ffffff;
        /*ubah warna tulisan*/
        color: black;
      }
  </style>
</head>
<body>
  @include('frontend.header')

  @yield('content')

  @include('frontend.footer')


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>

  </body>
</html>
