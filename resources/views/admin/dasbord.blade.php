<!DOCTYPE html>
<html>
<title>Semba.co</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/dasbordadmin.css')}}">
<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif
    }
</style>

<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-white w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-left">Semba.co</span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-blue w3-animate-left" style="z-index:3;width:250px;" id="mySidebar"><br>
        <div class="w3-container">
            <div class="w3-bar-block">
                <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
                <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-home "></i>&ensp;&ensp;Dashboard</a>
                <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-newspaper-o  "></i>&ensp;&ensp;Berita</a>
                <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-ticket"></i>&ensp; Permintaan</a>
                <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gift"></i>&ensp; Bantuan</a>
                <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cogs"></i>&ensp; Pengaturan</a>
                <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out"></i>&ensp; Keluar</a>
            </div>
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="#"></i></b></h5>
        </header>

        <div class="w3-row-padding w3-margin ">
            <div class="w3-quarter">
                <div class="w3-center"><img src=""></i></div>
                <div class="w3-center">
                    <div id="card1">
                        <div class="w3-threequarter">
                            <div id="card1-content">
                                <h3>Angka dari Database</h3>
                                <h7>Jumla Permintaan</h7>
                            </div>
                        </div>
                    </div>
                    <div class="w3-clear"></div>
                    <h4></h4>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-center"><i class=""></i></div>
                <div class="w3-center">
                    <div id="card2">
                        <div id="card2-content">
                            <h3>Angka dari Database</h3>
                            <h7>Jenis Sembako</h7>
                        </div>
                    </div>

                </div>
                <div class="w3-clear"></div>
                <h4></h4>
            </div>

        </div>

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="#"></i></b></h5>
        </header>

        <div class="w3-row-padding w3-margin">
            <div class="w3-quarter">

                <div class="w3-center"><img src=""></i></div>
                <div class="w3-ecnter">
                    <div id="card3">
                        <div class="w3-quarter">
                            <div id="card3-content">
                                <h3></h3>
                                <h3>Angka dari Database</h3>
                                <h7>Jumla Berita</h7>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-clear"></div>
                <h4></h4>

            </div>
        </div>
        <div class="col">


            <div id="card4">
                <div id="card4-content">
                    <div class="w3-ccenter">
                        <h3>Welcom back Admin Semba.co !</h3>
                    </div>

                </div>
            </div>

        </div>

        <!-- End page content -->
    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>

</body>

</html>