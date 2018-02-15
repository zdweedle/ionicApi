<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}"> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
<nav>
    <div class="nav-wrapper blue">
         <div class="container">

          <a href="#!" class="brand-logo" style=" text-align: center ">Logo</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="#!">home</a></li>

          </ul>
         </div>
    </div>
  </nav>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 
        <script src="{{ asset('js/init.js') }}"></script> 
    </body>