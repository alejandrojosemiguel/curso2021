<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- style -->
    <style>
        .active{
            background-color: rgb(98, 149, 184);
        }
    </style>
</head>
<body>
    <!-- header -->
    @include('layouts.partials.header')
    {{-- content  --}}
    @yield('content')
    <!-- footer -->
    @include('layouts.partials.footer')
    <!-- script -->
</body>
</html>