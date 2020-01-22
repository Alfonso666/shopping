<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="src/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/form-pago.css">

  </head>
  <body>
    <!--Se incluye el header de la page -->
    @include('parciales.header')
    <!--Se incluye el contenido -->
    <div class="container">
          @yield('contenido')
    </div>
    @yield('scripts')
    <script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="src/js/pagar.js" type="text/javascript" ></script>
    <script src="js/app.js" type="text/javascript"></script>
  </body>
</html>
