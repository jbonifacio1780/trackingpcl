<?php
    require_once("config/Conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login(); 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  
    <link rel="shortcut icon" href="./public/img/icons/favicon.png">

    <link rel="canonical" href="pages-sign-in.html">

    <title>Sign In | PCL</title>

    <link href="./public/css/css2.css?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="./public/css/light.css" rel="stylesheet">
    <!-- <script src="./public/js/settings.js"></script> -->
    <style>
        body {
            opacity: 0;
			background-image: 
			linear-gradient(7deg, rgba(2,0,36,1) 0%, rgba(39,17,68,1) 2%, rgba(10,19,20,0.49343487394957986) 50%),
			url("public/img/fondo/buques-fondo6.jpg");/* Control the height of the image */
			min-height: 380px;
			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: 100% 100%;;
			/* position: relative; */
		}
        .divlog {
            background-color: #fff;
            /* border: 5px solid #0b385f; */
            border-bottom-style: dashed;
            color: #fff;
        }
    </style>
    <!-- END SETTINGS -->
<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>

</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column" >
        <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1";
                                    ?>
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            El Usuario y/o Contraseña son incorrectos.
                                        </div>
                                    <?php
                                break;

                                case "2";
                                    ?>
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            Los campos estan vacios.
                                        </div>
                                    <?php
                                break;
                            }
                        }
                    ?>
            <div class="row vh-100" >
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center divlog">
                      
                              <img src="./public/img/avatars/logo.png" class="img-fluid" >
                        </div>

                        <div class="card" style="background-color: rgba(255,255,255,0.13); backdrop-filter: blur(10px);">
                            <div class="card-body">
                              
                                <h1 style="color:#fff;" class="text-center">Tracking Online</h1>
                                    <div class="text-center">
                                        
                                        <img src="./public/img/avatars/avatar-6.png" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132">
                                    </div>
                                    <form class="sign-box" action="" method="post" id="login_form">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" id="usu_correo"  name="usu_correo" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" type="password" id="usu_pass" name="usu_pass" placeholder="Enter your password">
                                            <small>
												<a href="./pages-reset-password.html">Forgot password?</a>
											</small>
                                        </div>
                                    
                                        <div class="text-center mt-3">
                                        
                                                <input type="hidden" name="enviar" class="form-control" value="si">
                                                <button type="submit" class="btn btn-lg btn-primary">Acceder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- <script src="./public/js/app.js"></script> -->

    <script type="text/javascript" src="index.js"></script>


    <!-- <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function() {
                if (localStorage.getItem('popState') !== 'shown') {
                    window.notyf.open({
                        type: "success",
                        message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
                        duration: 10000,
                        ripple: true,
                        dismissible: false,
                        position: {
                            x: "left",
                            y: "bottom"
                        }
                    });

                    localStorage.setItem('popState', 'shown');
                }
            }, 15000);
        });
    </script> -->
</body>

</html>

