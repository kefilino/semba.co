<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <title>Semba.co</title>
</head>

<body>
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


    <footer class="page-footer ">
        <div class="container-fluid text-center ">
            <p class="">Aplikasi ini dibawah naungan :</p>
            <img src="kemensos.png" class="img-fluid " alt="Responsive image">
        </div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>