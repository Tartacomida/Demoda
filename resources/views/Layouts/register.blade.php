<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') Registro</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
        <nav class="flex py-5 bg-red-500 text-white">
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-xl font-bold">Demoda</p>
            </div>
            <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
                <li>
                    <a href="" class="font-semibold hover:bg-red-600 py-3 px-4 rounded-xl">Ayuda</a>
                </li>
            </ul>
        </nav>

        @yield('content')
    </body>
</html>