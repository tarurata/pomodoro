<!DOCTYPE html>
<html lang="ja" class="has-navbar-fixed-top">
    <head>
        <meta charset="UTF-8">
        <title>Todos list</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content') 
    </body>
    <footer class="footer">Copyright 2019</footer>
</html>
