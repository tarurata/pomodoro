<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
    	<!-- コンポーネントの配置 -->
        <div id="app">
            <timer-component></timer-component>
        </div>

        <a href="/auth/twitter">ログイン</a>
        <a href="/auth/twitter/logout">ログアウト</a>

    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
