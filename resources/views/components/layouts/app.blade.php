<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Otakudesu Clone</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100">
    {{ $slot }}
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
