<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Linards prec Simonu">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{asset('storage/intro-background.jpg')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{Request::url()}}">
    <meta property="twitter:url" content="{{Request::url()}}">
    <meta name="twitter:title" content="Linards prec Simonu">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="{{asset('storage/intro-background.jpg')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
