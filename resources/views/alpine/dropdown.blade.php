<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js')}}"></script>
    </head>
    <body class="bg-gray-300 text-gray-700">
        <header class="border-t-4 border-blue-700 bg-white shadow-md">
            <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
                <ul class="flex">
                    <li><a href="/dropdown">Home</a></li>
                </ul>
                <div class="relative">
                    <button class="flex items-center">
                        <img src="{{ asset('amages/') }}" alt="">
                    </button>
                </div>
            </nav>
        </header>
    </body>
</html>