<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body class="bg-gray-200">
<div class="h-screen bg-gray-900 font-nunito">
    <div id="app">
<x-navi-bar />

@yield('content')

    </div>
</div>
</body>
</html>
