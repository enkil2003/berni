<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Mapa';
// Active class on nav
$active = null; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <?php include 'head.php'; ?>
    </head>
    <body>
        <div id="wrapper"><!-- Wrapper -->
            <div id="inner">
                <div id="wrapp-content">
                    <?php include 'header.php' ?>
                    <main id="content" class="cfix"><!-- MAIN => [CONTENT] -->
                        <section id="contenido">
                            <div id="inner-content">
                                <div id="block">
                                    <article id="acceso-padres"><!-- Dinamic => [CONTENT] -->
                                        <h1>Jardín Fabulinus</h1>
                                        <div id="google-map"></div>
                                        <p><b>Dirección: </b>Buenos Aires 550, 1617 General Pacheco, Bs As</p>
                                        <p><b>Teléfono: </b>011 4726-1123</p>
                                    </article><!-- END: dinamic => [CONTENT] -->
                                </div>
                            </div>
                        </section>
                        <?php include '../interfaz/aside.php'; ?>
                    </main><!-- END: MAIN => [CONTENT] -->
                </div>
                <?php include 'buttons.php' ?>
            </div>
            <?php include 'footer.php' ?>
        </div><!-- END: wrapper -->
        
        <!-- JS -->
        <script src="//maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="../interfaz/js/gmap3.min.js" type="text/javascript"></script>
        <script src="js/fabulinus.js" type="text/javascript"></script>
    </body>
</html>
