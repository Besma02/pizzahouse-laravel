<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">

       
    </head>
    <body class="antialiased">
   
        
        @yield('content')
        <footer>
            copyright@2024,pizzaHouse
        </footer>

    </body>
</html>
