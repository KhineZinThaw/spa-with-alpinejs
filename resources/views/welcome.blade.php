<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div x-data="{ show: false }">
            <button @click="show = !show">Show</button>
            <h1 x-show="show">Alpine Js is working !</h1>
        </div>
        <hr>
    
        <div x-data>
            <button @click="alert('Alpine Js is working !')">Click</button>
        </div>
    </body>
</html>
