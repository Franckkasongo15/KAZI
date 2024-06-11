<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>KAZI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    @yield('content')
    <!-- <ul>
        <li><a href="/home"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="/profile"><i class="fas fa-user"></i> Profile</a></li>
        <li><a href="/settings"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul> -->
</body>

</html>