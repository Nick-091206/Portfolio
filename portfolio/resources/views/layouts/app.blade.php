<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo')
    <link rel="icon" type="image/svg+xml" href="/img/Terminal.svg">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white font-sans overflow-x-hidden">
    @yield('content')
    
    @vite('resources/js/app.js')
</body>
</html>
