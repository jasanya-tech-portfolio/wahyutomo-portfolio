<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    
    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    {{-- Template JS --}}
    <script src="{{ asset('assets/js/main.js') }}" defer></script>

    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900">

    {{-- Include Navbar --}}
    @include('components.navbar')

    {{-- Page Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Include Footer --}}
    @include('components.footer')

    @vite('resources/js/app.js')
</body>
</html>
