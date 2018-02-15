<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>Laravel</title>

    
</head>
<body id="app-layout">
    <nav>
        <div class="nav-wrapper blue">
            <div class="container">
              <a href="#!" class="brand-logo">Logo</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#">Home</a></li>
                
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="#">Home</a></li>
              </ul>
              </div>
        </div>
    </nav>
    @yield('content')
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 
        <script src="{{ asset('js/init.js') }}"></script> 
    </body>