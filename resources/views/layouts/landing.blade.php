<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-white text-black font-sans">
    <nav class="navbar bg-white text-blue-600 border-b border-gray-200">
        <div class="container mx-auto flex items-center justify-between px-4 py-2">
            <a class="text-xl sm:text-3xl" href="/">Semba.co</a>
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
    <div class="jumbotron text-white">
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

<!-- <body>
    <header class="header">

        <nav class="navbar navbar-toggleable-md navbar-expand-lg fixed-top ">
            <a class="navbar-brand " href="#">Semba.co</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" data-value="about" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="login" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="register" href="register">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid">
            <div class="overlay"></div>
            <div class="container ">
                <h1 class="display-4">Semba.co</h1>
                <p class="lead">Aplikasi untuk pengajuan permintaan bantuan sembako dan sebagai pusat informasi mengenai bantuan pemerintah</p>
            </div>
        </div>

    </header>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body> -->