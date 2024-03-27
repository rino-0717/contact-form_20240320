<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>

<body>
    <div class="app">
        <head class="header">
            <h1 class="header_heading">FashionablyLate</h1>
            @yield('link')
        </head>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>