<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Otakudesu Clone</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        @yield('content')
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
