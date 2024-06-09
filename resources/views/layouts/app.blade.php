<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>KAZI</title>
    </head>
    <body class="bg-gray-50 dark:bg-slate-950">
        @yield('content')
    </body>
</html>