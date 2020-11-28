<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Semba.co') }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-white text-black font-sans">
    <nav class="navbar bg-white text-blue-600 border-b border-gray-200">
        <div class="flex items-center justify-between mx-auto px-4 py-2 h-15">
            <a class="sm:ml-16 text-xl sm:text-3xl" href="/">Semba.co</a>
            <ul class="flex items-center relative">
                <li class="sm:mr-4">
                    <a class="p-2 rounded text-base sm:text-xl hover:text-white hover:bg-indigo-600 transition duration-200" href="about">About</a>
                </li>
                @auth
                <li class="sm:mr-16">
                    <a class="p-2 rounded text-base sm:text-xl hover:text-white hover:bg-indigo-600 transition duration-200" href="dashboard">Dashboard</a>
                </li>
                @endauth
                @guest
                <li class="sm:mr-4">
                    <a class="p-2 rounded text-base sm:text-xl hover:text-white hover:bg-indigo-600 transition duration-200" href="login">Login</a>
                </li>
                <li class="sm:mr-16">
                    <a class="p-2 rounded text-base sm:text-xl hover:text-white hover:bg-indigo-600 transition duration-200" href="register">Register</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    <div class="flex jumbotron text-white overflow-y-auto">
        {{ $slot }}
    </div>
</body>

<footer class="text-xs pt-2 sm:pt-6 sm:text-base">
    <div class="container mx-auto text-center">
        <p class="text-gray-600">Dibawah naungan:</p>
        <img src="images/asset/kemensos.png" class="pt-2 max-h-16 sm:max-h-24 mx-auto" alt="Logo Kemensos">
    </div>
</footer>

</html>