<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vlad Verheij')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="layout-container">
        @include('includes.header')

        <main>
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
</body>
</html>
