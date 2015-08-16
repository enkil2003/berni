<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Fotos Nivel Inicial';
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
                                    <article id="como-trabajamos"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">Fotos Nivel Secundaria</h1>
                                        <?php
    // Obtengo los los albums disponibles
    $resultados = [];
$consulta = "SELECT * FROM albums WHERE escuela = 'secundaria'";
if($resultado = $mysqli->query($consulta)) {
    while ($fila = $resultado->fetch_row()) {
        $consulta_primer_foto = "SELECT * FROM fotos WHERE id_album = {$fila[0]} LIMIT 1";
        if($resultado_primer_foto = $mysqli->query($consulta_primer_foto)) {
            $name = [];
            while ($fila_primer_foto = $resultado_primer_foto->fetch_row()) {
                $name[] = $fila_primer_foto[2]; } 
        } $resultado_primer_foto->close(); 
        $resultados[] = '<div class="box-slider-parent" data-album="'.$fila[0].'">
        <div class="figure-slider" style="background-image:url(img/fotos/'.$name[0].')"></div>
        <div class="text-slider transition"></div></div>'; 
    } $resultado->close(); } $mysqli->close(); 

// Genero el slider con los resultados de la consulta
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
}else {
    echo '<h2>No se encontraron fotos.</h2>';
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
        <script src="js/secundaria.js" type="text/javascript"></script>
    </body>
</html>
