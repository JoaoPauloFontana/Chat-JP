<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>
<body>
    <div id="app" class="container">
        @yield('content')
    </div>

    @vite(['resources/js/app.js', 'resources/css/chat.css', 'resources/css/app.css'])

</body>
</html>
