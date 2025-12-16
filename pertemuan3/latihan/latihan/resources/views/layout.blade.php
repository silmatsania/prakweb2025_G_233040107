<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-blue-600 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-white font-bold text-xl">MyWebsite</h1>
            <div class="space-x-6 text-white font-medium">
                <a href="/" class="hover:text-yellow-300">Home</a>
                <a href="/about" class="hover:text-yellow-300">About</a>
                <a href="/categories" class="hover:text-yellow-300">Categories</a>
                <a href="/contact" class="hover:text-yellow-300">Contact</a>
            </div>
        </div>
    </nav>

    <!-- KONTEN -->
    <main class="flex-1 max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-gray-300 text-center py-4">
        © {{ date('Y') }} MyWebsite | Laravel + Tailwind
    </footer>

</body>
</html>
