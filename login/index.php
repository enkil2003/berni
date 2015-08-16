<?php 
// Login functions of the website
include 'login.php';
// Seo || title || subtitle =>
$title = 'FABULINUS - BERNI';
$subtitle = 'Acceso'; ?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
        <meta name="keywords" content="<?php echo $keywords; ?>"/>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="robots" content="all"/>
        <meta name="author" content="<?php echo $author; ?>"/>
        <link rel="shortcut icon" href="../interfaz/img/icons/favicon.ico"/>
        <title><?php echo $title; if($subtitle){ echo' | '.$subtitle; } ?></title>
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/main.css" type="text/css" />
        <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
    </head>
    <body>

        <div id="wrapper">
            <div class="table">
                <div class="table-cell">
                    <form id="login-form" method="post" action="index.php">
                        <div class="table">
                            <div class="table-cell text-center">
                                <div id="contenido-login">
                                    <img id="logo" src="img/logo.png" alt="" title="" />
                                    <?php if($_GET["q"] || $invalid_login){ ?>
                                    <div class="response">
                                        <i class="fa fa-info-circle"></i>
                                        <p class="vertical-align-middle">
                                            <?php if($_GET["q"]){ echo $_GET["q"]; }
                                                  else if($invalid_login){ echo 'Usuario y/o contraseña incorrectos.'; }; ?></p>
                                    </div>
                                    <?php } ?>
                                    <div class="input">
                                        <i class="fa fa-user"></i>
                                        <input name="username" type="text" maxlength="40" placeholder="Nombre de usuario" />
                                    </div>
                                    <div class="input">
                                        <i class="fa fa-key"></i>
                                        <input autocomplete="off" maxlength="50" name="password" type="password" placeholder="Contraseña" />
                                    </div>
                                    <!-- <a id="password-lost" href="#">¿Has perdido tu contraseña?</a> -->
                                    <input type="hidden" name="token" value="<?php echo $token; ?>" />
                                    <button class="btn purple"><i class="fa fa-sign-in"></i> INGRESAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="back-button">
                        <a href="<?php echo dameURL(); ?>">« Volver a FABULINUS – BERNI</a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
