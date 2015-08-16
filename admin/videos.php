<?php 
$admin = true;
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$title = 'Administrador';
$subtitle = 'Videos'; ?>
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
                    <h1>Videos</h1>

                    <?php 
// Obtengo los videos de fabulinus
$videosFabulinus = [];
$resultado = $mysqli->query("SELECT * FROM videos WHERE escuela = 'fabulinus'");
while ($fila = $resultado->fetch_assoc()) {
    $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".$fila['id_video'].".php"));
    $videosFabulinus[] = '<div class="video-box" data-id="'.$fila['id'].'" style="background-image:url(http://i.vimeocdn.com/video/'.$hash[0]['thumbnail_large'].'.jpg)"><div class="overlay-video"><div class="bttns-video cfix"><a href="#" title="Borrar" class="right-bttn-video"><i class="fa fa-eraser"></i></a></div></div></div>';  } 

// Obtengo los videos de primaria
$videosPrimaria = [];
$resultado2 = $mysqli->query("SELECT * FROM videos WHERE escuela = 'primaria'");
while ($fila2 = $resultado2->fetch_assoc()) {
    $hash2 = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".$fila2['id_video'].".php"));
    $videosPrimaria[] = '<div class="video-box" data-id="'.$fila2['id'].'" style="background-image:url(http://i.vimeocdn.com/video/'.$hash2[0]['thumbnail_large'].'.jpg)"><div class="overlay-video"><div class="bttns-video cfix"><a href="#" title="Borrar" class="right-bttn-video"><i class="fa fa-eraser"></i></a></div></div></div>';  } 

// Obtengo los videos de secundaria
$videosSecundaria = [];
$resultado3 = $mysqli->query("SELECT * FROM videos WHERE escuela = 'secundaria'");
while ($fila3 = $resultado3->fetch_assoc()) {
    $hash3 = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".$fila3['id_video'].".php"));
    $videosSecundaria[] = '<div class="video-box" data-id="'.$fila3['id'].'" style="background-image:url(http://i.vimeocdn.com/video/'.$hash3[0]['thumbnail_large'].'.jpg)"><div class="overlay-video"><div class="bttns-video cfix"><a href="#" title="Borrar" class="right-bttn-video"><i class="fa fa-eraser"></i></a></div></div></div>';  } 

                    ?>

                    <section class="videos-parent">
                        <h2>Videos nivel inicial</h2>
                        <?php 
if(!$videosFabulinus){
    echo '<p class="not-found-text">No se encontraron videos.</p>';
} else {
    foreach($videosFabulinus as $v ){
        echo $v; } 
}
                        ?>
                        <div class="add-more-videos transition" data-school="fabulinus">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="videos-parent">
                        <h2>Videos nivel primaria</h2>
                        <?php 
if(!$videosPrimaria){
    echo '<p class="not-found-text">No se encontraron videos.</p>';
} else {
    foreach($videosPrimaria as $v ){
        echo $v; } 
}
                        ?>
                        <div class="add-more-videos transition" data-school="primaria">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="videos-parent">
                        <h2>Videos nivel secundaria</h2>
                        <?php 
if(!$videosSecundaria){
    echo '<p class="not-found-text">No se encontraron videos.</p>';
} else {
    foreach($videosSecundaria as $v ){
        echo $v; } 
}
                        ?>
                        <div class="add-more-videos transition" data-school="secundaria">
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
                            <div id="inner-lightbox-videos">
                                <div id="top-lightbox-videos" class="cfix">
                                    <p>Agregar nuevo video en <span id="text-video"></span>.
                                        <a id="close-light-box-videos" href="#"><i class="fa fa-times"></i></a>
                                    </p>
                                </div>
                                <div id="contenido-lightbox-videos" class="cfix">
                                    <div id="inner-contenido-lightbox-videos">
                                        <form id="video_uploads">
                                            <div class="box-form"><label>Video id</label><input id="video_upload" name="id" type="text"></div>
                                        </form>
                                    </div>
                                    <a id="guardar-video" data-school="null" class="inactive" href="#">Guardar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="background-lighbox-videos"></div>
                </div><!-- END: lightbox -->

            </section>


        </div><!-- END: #wrapper -->

    </body>
</html>
