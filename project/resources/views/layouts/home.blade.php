<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Routing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script> src="{{ asset('js/app.js') }}"</script>
</head>
<body>

    {{-- header --}}
    @include("components.header")
    {{-- content --}}
    @yield('pagamenti')
    @yield('pending') 
    {{-- footer --}}
    @include("components.footer")


</body>
</html> 