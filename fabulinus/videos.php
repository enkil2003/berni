<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Videos';
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
                                    <article id="videos"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">Videos Nivel Inicial</h1>
                                        <?php

    // Obtengo los los videos disponibles
    $resultados = [];
$consulta = "SELECT * FROM videos WHERE escuela = 'fabulinus'";
if($resultado = $mysqli->query($consulta)) {
    while ($fila = $resultado->fetch_row()) {
        $hash = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$fila[1].php"));
        $resultados[] = '<div class="box-slider-parent-video" data-id="'.$fila[1].'">
        <div class="figure-slider" style="background-image:url('.$hash[0]['thumbnail_large'].')"></div>
        <div class="text-slider transition"></div></div>'; 
    } $resultado->close(); } $mysqli->close(); 

// Muestro las imagenes de los videos
if($resultados){
    $rows = array_chunk($resultados, 6);
    print "<div id='contenido-slider'>";
    print "<ul class='slider-parent'>";
    foreach ($rows as $row) {
        print "<li>";
        foreach ($row as $value) {
            print $value;
        }
        print "</li>";
    }
    print "</ul>";
    print "</div>";
} else {
    echo '<h2>No se encontraron Videos.</h2>';
}

                                        ?>

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
        <script src="../interfaz/js/jquery.bxslider.min.js" type="text/javascript"></script>
        <script src="js/fabulinus.js" type="text/javascript"></script>
    </body>
</html>
