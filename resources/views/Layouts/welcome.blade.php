<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - Admin</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="css/estilohome.css">
        <script src="https://cdn.tailwindcss.com"></script>
        
    </head>
    <body class="bg-gray-100">
        

        @yield('content')
    </body>
    <script src="js/scripthome.js"></script>
</html>