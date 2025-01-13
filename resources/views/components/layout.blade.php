<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <x-nav-link attribute="home">Home</x-nav-link>
    <x-nav-link attribute="about">About</x-nav-link>
    <x-nav-link attribute="contact">Contact</x-nav-link>
    {{ $slot }}

</body>
</html>
