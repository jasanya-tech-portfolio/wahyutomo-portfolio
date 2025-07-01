<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Include Navbar --}}
    @include('components.navbar')

    {{-- Page Content --}}
    <main class="min-h-screen py-10">
        @yield('content')
    </main>

    {{-- Include Footer --}}
    @include('components.footer')

    @vite('resources/js/app.js')
</body>
</html>
