<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite('resources/css/app.css')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body class="bg-gray-100">
    <div id="app" class="min-h-screen flex flex-col">

        @include('inc.navbar')

        <main class="flex-grow p-8">
            @include('inc.messages')
            @yield('content')
        </main>

        <footer class="bg-gray-200 p-6">
            <!-- Content for footer -->
            <h3>Footer</h3>
        </footer>
    </div>
    <script>
        CKEDITOR.replace('body');
    </script>
</body>
</html>
