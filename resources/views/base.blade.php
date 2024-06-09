<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Young Toriven Club | @yield('title')</title>
    {{-- CSS Connection --}}
    <link rel="stylesheet" href=" {{asset('assets/css/style.css')}} ">

    @vite('resources/css/app.css')
</head>
<body>

    <div>
        @yield('body')
    </div>

{{-- JS Connection --}}
<script src=" {{asset('assets/css/style.css')}} "></script>
</body>
</html>
