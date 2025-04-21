<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="min-h-screen bg-base-200">
    @include('layouts.header')
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow flex">
            @include('layouts.sidebar')
            <div class="flex-grow">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
</body>
</html>
