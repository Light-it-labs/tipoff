<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to {{ env('MULTISITE_HOST') }}</title>
    @yield('css')
</head>
<body>
    <section id="app">
        @yield('content')
    </section>

    @yield('js')
</body>
</html>
