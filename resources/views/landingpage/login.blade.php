<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
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
                        <a class="nav-link " data-value="login" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="register" href="../register">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="card">
            <div id="card-content">
                <div id="card-logo">
                    <center><img src="{{asset('images/user-logo.png')}}"><br></center>
                </div>
                <div id="card-title">
                    <h2>Login</h2>
                    <div class="underline-title"></div>
                </div>
                <form method="post" class="form">
                @csrf
                    <label for="user-email" style="padding-top:13px">
                        &nbsp;E-mail :
                    </label>
                    <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                    <div class="form-border"></div>
                    <label for="user-password" style="padding-top:22px">&nbsp;Password :
                    </label>
                    <input id="user-password" class="form-content" type="password" name="password" required />
                    <div class="form-border"></div>
                    <a href="#">
                        <legend id="forgot-pass">Forgot password?</legend>
                    </a>
                    <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                    <a href="#" id="signup">Don't have an account ? Sign Up</a>
                </form>
            </div>
        </div>
</body>

</html>