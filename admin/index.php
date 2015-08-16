<?php 
$admin = true;
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$title = 'Bienvenido';
$subtitle = $_SESSION['colegio_username']; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <?php include 'head.php'; ?>
    </head>
    <body>

        <div id="wrapper">

            <?php include 'header.php' ?>

            <?php include 'sidebar.php' ?>

        </div><!-- END: #wrapper -->

    </body>
</html>
