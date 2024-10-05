<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </link>
</head>

<body>
    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.contact')

    @include('layouts.partials.footer')
</body>

</html>
