<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main/app.css">
    @stack('css')
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/pages/auth.css">
</head>
</head>

<body>
    <div id="auth">
        @yield('content')
    </div>

    <script src="{{ asset('assets') }}/js/app.js"></script>
</body>

</html>
