<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ポモドーロタイマー</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="body__container">
            @include('inc.navbar')
            @include('inc.messages')
            @yield('content') 
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
    <footer class="footer text-center">Copyright 2019</footer>
</html>
