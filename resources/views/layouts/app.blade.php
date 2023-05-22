<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')">
</head>
<body>
    

    @if(session('status'))
        {{ session('status') }}
@endif

    {{-- This is for use templates --}}
    {{-- The dot is for use in case of a folder --}}
    @include('partials.navigation')

    {{-- Basically the yield is for indicates a secuences of content using section --}}
    @yield('content')


</body>
</html>