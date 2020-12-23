<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba IDW</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            body {
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
            }
        </style>
    </head>
    <body class="">
        <div id="app">
            <mainapp></mainapp>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>

</html>
