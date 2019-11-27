<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>RSS Reader by VR</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
        <div class="container">
            @yield('content')
        </div>
    </body>

    <footer class="text-center">Copyright 2019</footer>
</html>
