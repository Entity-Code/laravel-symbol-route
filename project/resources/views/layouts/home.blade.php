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

    @include("components.header")

    <div class="content">
        Hello World!
        @yield('content')
    </div>

    

    @include("components.footer")




</body>
</html> 