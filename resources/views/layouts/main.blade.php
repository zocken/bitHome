<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('/public/apple-touch-icon-152x152-precomposed.png')}}" />
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <title>B-IT Rent a Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- own css -->
        <link href="{{asset('/public/css/bit.css')}}" rel="stylesheet">

    </head>
    <body class="bg" >   
      <div id="size-debugger-bs4" style=" position: fixed;bottom: 50px;left: 50px;width: 60px;height: 50px;border: 3px solid red;z-index: 9999999;background: #fff;opacity: 0.5;">
        <style> span.naderio-vp-bs4 {width: 100%;font-size: 30px;line-height: 40px;text-align: center;}</style>
        <span class="naderio-vp-bs4 d-block d-sm-none">XS</span>
        <span class="naderio-vp-bs4 d-none d-sm-block d-md-none">SM</span>
        <span class="naderio-vp-bs4 d-none d-md-block d-lg-none">MD</span>
        <span class="naderio-vp-bs4 d-none d-lg-block d-xl-none">LG</span>
        <span class="naderio-vp-bs4 d-none d-xl-block">XL</span>
</div>  
       
                  <nav class="blured navbar  fixed-top navbar-expand-md navbar-light" style="margin-bottom:50; font-size: 20px;">
                    <a class="navbar-brand" href="#">
                      
                      <img src="{{asset('/public/img/bit.png')}}" width="100" height="65">
                     
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('bithome') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#pricing">Preise</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#kontakt">Kontakt</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                          <a class="text-dark nav-link" href="{{ route('impressum') }}">Impressum</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                          <a class="text-dark nav-link" href="{{ route('agb') }}">AGB</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                          <a class="text-dark nav-link" href="{{ route('dsgvo') }}">Datenschutz</a>
                         </li>
                        
                        
                        
                        </li>
                      </ul>
                    </div>
                  </nav>
                  



@yield('content')




</div>
</div>
</div>
</div>

@include('layouts.footer')



</body>
</html>