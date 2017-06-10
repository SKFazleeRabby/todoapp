<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo - All Todos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
</head>
<body>
@yield('modal')
@include('partial.header')

<div class="errors">
    <div class="container">
        @yield('errors')
    </div>
</div>


<section class="content">
    @yield('content')
</section>

@include('partial.footer')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>