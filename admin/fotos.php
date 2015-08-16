<?php 
$admin = true;
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$title = 'Administrador';
$subtitle = 'Fotos'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <?php include 'head.php'; ?>
    </head>
    <body>

        <div id="wrapper">

            <?php include 'header.php'; ?>

            <?php include 'sidebar.php'; ?>



            <section id="contenido">
                <article id="inner-content">
                    <h1>Albums</h1>
                    <?php 

// Obtengo los albums de fabulinus
$albumsNivelInicial = [];
$consulta = "SELECT * FROM albums WHERE escuela = 'fabulinus'";
if($resultado = $mysqli->query($consulta)) {
    while ($fila = $resultado->fetch_row()) {
        $consulta_primer_foto = "SELECT * FROM fotos WHERE id_album = {$fila[0]} LIMIT 1";
        if($resultado_primer_foto = $mysqli->query($consulta_primer_foto)) {
            $name = [];
            while ($fila_primer_foto = $resultado_primer_foto->fetch_row()) {
                $name[] = $fila_primer_foto[2]; } 
        } $resultado_primer_foto->close(); 
        if(!$name){
            $albumsNivelInicial[] = '<div class="box-parent-albums" data-album="'.$fila[0].'">
        <div class="image-album" style="background-image:url(../interfaz/img/plataforma/image404.jpg)"></div>
        <div class="hover-album transition"><div class="bttns-album cfix"><a href="#" title="Editar" class="left-bttn-album"><i class="fa fa-pencil"></i></a><a href="#" title="Borrar" class="right-bttn-album"><i class="fa fa-eraser"></i></a></div></div></div>'; }
        else {
            $albumsNivelInicial[] = '<div class="box-parent-albums" data-album="'.$fila[0].'">
        <div class="image-album" style="background-image:url('.dameURL().'fabulinus/img/fotos/'.$name[0].')"></div>
        <div class="hover-album transition"><div class="bttns-album cfix"><a href="#" title="Editar" class="left-bttn-album"><i class="fa fa-pencil"></i></a><a href="#" title="Borrar" class="right-bttn-album"><i class="fa fa-eraser"></i></a></div></div></div>'; }
    } $resultado->close(); } 

// Obtengo los albums de primaria
$albumsNivelPrimaria = [];
$consulta2 = "SELECT * FROM albums WHERE escuela = 'primaria'";
if($resultado2 = $mysqli->query($consulta2)) {
    while ($fila = $resultado2->fetch_row()) {
        $consulta_primer_foto = "SELECT * FROM fotos WHERE id_album = {$fila[0]} LIMIT 1";
        if($resultado_primer_foto = $mysqli->query($consulta_primer_foto)) {
            $name = [];
            while ($fila_primer_foto = $resultado_primer_foto->fetch_row()) {
                $name[] = $fila_primer_foto[2]; } 
        } $resultado_primer_foto->close(); 
        if(!$name){
            $albumsNivelPrimaria[] = '<div class="box-parent-albums" data-album="'.$fila[0].'">
        <div class="image-album" style="background-image:url(../interfaz/img/plataforma/image404.jpg)"></div>
        <div class="hover-album transition"><div class="bttns-album cfix"><a href="#" title="Editar" class="left-bttn-album"><i class="fa fa-pencil"></i></a><a href="#" title="Borrar" class="right-bttn-album"><i class="fa fa-eraser"></i></a></div></div></div>'; }
        else {
            $albumsNivelPrimaria[] = '<div class="box-parent-albums" data-album="'.$fila[0].'">
        <div class="image-album" style="background-image:url('.dameURL().'primaria/img/fotos/'.$name[0].')"></div>
        <div class="hover-album transition"><div class="bttns-album cfix"><a href="#" title="Editar" class="left-bttn-album"><i class="fa fa-pencil"></i></a><a href="#" title="Borrar" class="right-bttn-album"><i class="fa fa-eraser"></i></a></div></div></div>'; }
    } $resultado->close(); } 

// Obtengo los albums de secundaria
$albumsNivelSecundaria = [];
$consulta3 = "SELECT * FROM albums WHERE escuela = 'secundaria'";
if($resultado3 = $mysqli->query($consulta3)) {
    while ($fila = $resultado3->fetch_row()) {
        $consulta_primer_foto = "SELECT * FROM fotos WHERE id_album = {$fila[0]} LIMIT 1";
        if($resultado_primer_foto = $mysqli->query($consulta_primer_foto)) {
            $name = [];
            while ($fila_primer_foto = $resultado_primer_foto->fetch_row()) {
                $name[] = $fila_primer_foto[2]; } 
        } $resultado_primer_foto->close(); 
        if(!$name){
            $albumsNivelSecundaria[] = '<div class="box-parent-albums" data-album="'.$fila[0].'">
        <div class="image-album" style="background-image:url(../interfaz/img/plataforma/image404.jpg)"></div>
        <div class="hover-album transition"><div class="bttns-album cfix"><a href="#" title="Editar" class="left-bttn-album"><i class="fa fa-pencil"></i></a><a href="#" title="Borrar" class="right-bttn-album"><i class="fa fa-eraser"></i></a></div></div></div>'; }
        else {
            $albumsNivelSecundaria[] = '<div class="box-parent-albums" data-album="'.$fila[0].'">
        <div class="image-album" style="background-image:url('.dameURL().'secundaria/img/fotos/'.$name[0].')"></div>
        <div class="hover-album transition"><div class="bttns-album cfix"><a href="#" title="Editar" class="left-bttn-album"><i class="fa fa-pencil"></i></a><a href="#" title="Borrar" class="right-bttn-album"><i class="fa fa-eraser"></i></a></div></div></div>'; }
    } $resultado->close(); }  $mysqli->close(); ?>

                    <?php // Muestro las secciones padres con sus albums ?>
                    <section class="albums-parent">
                        <h2>Nivel inicial</h2>
                        <?php  if($albumsNivelInicial){
    foreach($albumsNivelInicial as $q){
        echo $q;
    }
} else { echo '<p class="not-found-text">No se encontraron albums.</p>'; } ?>
                        <div class="box-parent-albums add-more transition" data-identificador="fabulinus">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="albums-parent">
                        <h2>Nivel primaria</h2>
                        <?php  if($albumsNivelPrimaria){
    foreach($albumsNivelPrimaria as $q){
        echo $q;
    }
} else { echo '<p class="not-found-text">No se encontraron albums.</p>'; } ?>
                        <div class="box-parent-albums add-more transition" data-identificador="primaria">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="albums-parent">
                        <h2>Nivel secundaria</h2>
                        <?php  if($albumsNivelSecundaria){
    foreach($albumsNivelSecundaria as $q){
        echo $q;
    }
} else { echo '<p class="not-found-text">No se encontraron albums.</p>'; } ?>
                        <div class="box-parent-albums add-more transition" data-identificador="secundaria">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>

                <div id="lighbox-admin"><!-- LightBox -->
                    <div class="table">
                        <div class="table-cell">
                            <div id="inner-lightbox-albums">
                                <div id="top-lightbox-albums" class="cfix">
                                    <p><span id="text-header-lightbox"></span> <span id="text-lightBox"></span>
                                        <a id="close-light-box" href="#"><i class="fa fa-times"></i></a>
                                    </p>
                                </div>
                                <div id="contenido-lightbox-albums">
                                    <div id="inner-contenido-lightbox-albums"></div>
                                    <a id="publicar-album" class="inactive" data-identificador="null" href="#">Publicar album</a>
                                    <a id="guardar-album" class="inactive" data-album="null" href="#">Guardar</a>
                                    <a id="bttn-more-photos" href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="background-lighbox-albums"></div>
                </div><!-- END: lightbox -->

            </section>


        </div><!-- END: #wrapper -->

    </body>
</html>
