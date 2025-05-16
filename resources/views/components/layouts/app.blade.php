<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Awwdio - let's listen together</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=aleo:300,500,700|annie-use-your-telescope:400|figtree:400,600&display=swap"
        rel="stylesheet" />



    <wireui:scripts />

</head>

<wireui:scripts />
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    {{ $slot }}
</body>

</html>
