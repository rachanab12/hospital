<HTML lang="en">
<HEAD>
    <meta charset="utf-8">
    <TITLE>@yield('title')</TITLE>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/INDEX.CSS')}}" rel="stylesheet">

</HEAD>
<BODY>

@include('partials.header')
@yield('container')


<script src="{{asset('js/jquery-slim.min.js')}}"></script>
   <script src="{{asset('js/popper.min.js')}}"> </script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>



  </BODY>

  </HTML>
