<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Portfolio Project by Joshua Fulgencio, an E-Commerce Prototype Website">
    <meta name="keywords" content="E-commerce, Buy Products, Sell Own Products, Joshua B. Fulgencio">
    <meta name="author" content="Joshua B. Fulgencio">

    <title>FuLaraVue by Fulgencio</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="antialiased">
    <v-app>
        <div id="app"></div>
    </v-app>
</body>

</html>