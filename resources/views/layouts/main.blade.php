<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" /> <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <title>B-IT Rent a Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- own css -->
        <link href="{{asset('/public/css/bit.css')}}" rel="stylesheet">

       
    </head>
    <body>

        <div class="container-fluid h-100">
            <div class="row h-100">
              <div style="font-size:25px" class="col-5 col-md-2 collapse width m-0 p-0 h-100 bg-light" id="collapseExample">
                <a href="{{ route('bithome') }}" >Home</a><br/>
                <a href="{{ route('impressum') }}" >Impressum</a><br/>
                <a href="{{ route('agb') }}" >Allgemeine Geschäftsbedingungen</a><br/>
                <a href="{{ route('agb') }}" >Meine Page ordern</a><br/>


              </div>
              <div class="col">
                <div class="row">
                  <div class="col-1">
                    <button class="btn sticky-top" data-toggle="collapse" href="#collapseExample" role="button">
                     <span style="font-size:25px"> Menu </span>
                    </button>   
                  </div>
                  
          



@yield('content')



@include('layouts.footer')

</div>
</div>
</div>
</div>

</body>
</html>