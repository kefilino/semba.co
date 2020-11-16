<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
    <title>Semba.co</title>
</head>

<body>
    <header class="header">

        <nav class="navbar navbar-toggleable-md navbar-expand-lg fixed-top ">
            <a class="navbar-brand " href="../">Semba.co</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" data-value="about" href="../about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="login" href="../login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="register" href="#">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="card">
            <div id="card-content">
                <div id="card-logo">
                    <img src="{{asset('images/user-logo.png')}}"><br>
                </div>
                <div id="card-title">
                    <h2>Register</h2>
                    <div class="underline-title"></div>
                </div>
                <form action="/register" method="post" class="form">
                    @csrf
                    <div class="container">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="row mx-md-n5">
                            <div class="col px-md-5">
                                <label for="regist-nama" style="padding-top:13px">
                                    &nbsp;Nama Lengkap :
                                </label>
                                <input id="regist-nama" class="form-content form-control input-lg" type="name" name="nama" autocomplete="on" required value="{{ old('nama') }}" />
                                <div class="form-border"></div>
                                <label for="user-email" style="padding-top:13px">
                                    &nbsp;E-mail :
                                </label>
                                <input id="user-email" class="form-content form-control input-lg" type="email" name="email" autocomplete="on" required value="{{ old('email') }}" />
                                <div class="form-border"></div>
                                <label for="user-password" style="padding-top:22px">
                                    &nbsp;Password :
                                </label>
                                <input id="user-password" class="form-content form-control input-lg" type="password" name="password" required />
                                <div class="form-border"></div>
                                <label for="password_confirmation" style="padding-top:22px">
                                    &nbsp;Konfirmasi Password :
                                </label>
                                <input id="user-password" class="form-content form-control input-lg" type="password" name="password_confirmation" required />
                                <div class="form-border"></div>
                            </div>
                            <div class="col px-md-5">
                                <label for="user-nik" style="padding-top:13px">
                                    &nbsp;Nomor Induk Kependudukan :
                                </label>
                                <input id="user-nik" class="form-content form-control input-lg" type="text" name="nik" autocomplete="on" required value="{{ old('nik') }}" />
                                <div class="form-border"></div>
                                <label for="user-kk" style="padding-top:13px">
                                    &nbsp;Nomor Kartu Keluarga :
                                </label>
                                <input id="user-kk" class="form-content form-control input-lg" type="text" name="kk" autocomplete="on" required value="{{ old('kk') }}" />
                                <div class="form-border"></div>
                                <label for="user-alamat" style="padding-top:22px">
                                    &nbsp;Alamat :
                                </label>
                                <input id="user-alamat" class="form-content form-control input-lg" type="text" name="alamat" required value="{{ old('alamat') }}" />
                                <div class="form-border"></div>
                                <label for="user-kode_pos" style="padding-top:22px">
                                    &nbsp;Kode Pos :
                                </label>
                                <input id="user-kode_pos" class="form-content form-control input-lg" type="text" name="kode_pos" required value="{{ old('kode_pos') }}" />
                                <div class="form-border"></div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <input id="submit-btn" type="submit" name="submit" value="SIGN-UP" />
                        </div>
                        <div class="row justify-content-md-center">
                            <a href="login" id="signup">Already have an account ? Sign In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>