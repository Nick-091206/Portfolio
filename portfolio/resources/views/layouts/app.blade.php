<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nick Colijn - Portfolio')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white font-sans overflow-x-hidden">
    @yield('content')
    
    @vite('resources/js/app.js')
</body>
</html>
