<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Octal Blog') }}</title>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">

        @include('inc.navbar')

        <main class="flex-grow p-6">
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
