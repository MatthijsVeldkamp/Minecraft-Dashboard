<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-base-200">
    @include('layouts.header')
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
</body>
</html>
