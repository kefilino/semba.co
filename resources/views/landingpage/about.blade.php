<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Semba.co</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
</head>

<body>
    <header class="header">

        <nav class="navbar navbar-toggleable-md navbar-expand-lg fixed-top ">
            <a class="navbar-brand " href="../">Semba.co</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <a class="nav-link mr-5" data-value="about" href="#">About</a>
                    <a class="nav-link mr-5" data-value="blog" href="login">Login</a>
                    <a class="nav-link mr-5" data-value="contact" href="register">Sign up</a>
                </ul>
            </div>
        </nav>
    </header>
    <div class="jumbotron jumbotron-fluid container-login100" style="background-color: blue">
        <div class="overlay"></div>
        <div class="container ">
            <h1 class="display-4">About</h1>
            <p class="lead">Semba.co adalah aplikasi untuk pengajuan permintaan bantuan sembako kepada masyarakat Indonesia dan sebagai pusat informasi mengenai bantuan pemerintah</p>

            <div class="d-flex justify-content-around">
                <div class="w3-hover-shadow w3-center border-about">
                    <img src="{{ asset('images/news-about.png') }}" class=" w3-padding" alt="Alps" style="width: 7em; height: 5em;">
                    <p style="padding: 0.5em">Berita Semba.co</p>
                </div>
                <div class="w3-hover-shadow w3-center border-about">
                    <img src="{{ asset('images/request-about.png') }}" class=" w3-padding" alt="Alps" style="width: 7em; height: 5em;">
                    <p style="padding: 0.5em">Pengajuan Bantuan</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container-fluid text-center ">
            <p class="">Aplikasi ini dibawah naungan :</p>
            <img src="{{ asset('images/kemensos.png') }}" alt="" style="width: 7em; height: 7em;">
        </div>
    </div>
    {{-- bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>