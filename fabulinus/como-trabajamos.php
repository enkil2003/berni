<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Como Trabajamos';
// Active class on nav
$active = 3; ?>
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
                                        <hgroup>
                                            <h1 class="margin-bottom">CÓMO TRABAJAMOS</h1>
                                        </hgroup>
                                        <section class="margin-bottom">
                                            <h3>Nuestra Propuesta</h3><br/>
                                            <p>En Fabulinus proponemos al jardín como un espacio de juegos compartidos, como un lugar de exploración, investigación, en un ámbito generador de conocimientos y producciones creativas privilegiando la armonía, la serenidad el bienestar, la luminosidad y la alegría.
                                                Estamos convencidas de la importancia de general proyectos atractivos y significativos que promuevan múltiples experiencias personales y de relaciones con otros y con su entorno.<br/>
                                                Promovemos la capacidad creadora a partir de la inmersión y el contacto con el arte, siendo éste un importante eje de trabajo.
                                                Los proyectos de cada sala abarcan una variedad de contenidos provenientes de las Ciencias Sociales, Naturales, Matemática, La Literatura, La Lengua, La Plástica, La Música, La Danza, Inglés, Educación Física, Psicomotricidad.
                                            </p>
                                            <div class="margin-top">
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto01.jpg">
                                                    <img class="img-l1" src="img/plataforma/como-trabajamos/foto01.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto02.jpg">
                                                    <img class="img-l2" src="img/plataforma/como-trabajamos/foto02.jpg" alt="" title="" />
                                                </a>
                                            </div>
                                            <div class="margin-top-2">
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto03.jpg">
                                                    <img class="img-l1" src="img/plataforma/como-trabajamos/foto03.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto04.jpg">
                                                    <img class="img-l2" src="img/plataforma/como-trabajamos/foto04.jpg" alt="" title="" />
                                                </a>
                                            </div>
                                        </section>
                                        <section class="margin-bottom">
                                            <h3>Una Propuesta traducida en Territorios</h3><br/>
                                            <p>
                                                El proyecto estético forma parte de la identidad del jardín Fabulinus, entendiendo a la estética como una cuestión ética.
                                                Como equipo pedagógico, hemos trabajado en la creación de espacios educativos que expresen y comuniquen el proyecto pedagógico, espacios que den visibilidad a una imagen de infancia llena de potencialidades.</p>
                                            <div class="margin-top margin-bottom">
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto05.jpg">
                                                    <img class="img-l1" src="img/plataforma/como-trabajamos/foto05.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto06.jpg">
                                                    <img class="img-l2" src="img/plataforma/como-trabajamos/foto06.jpg" alt="" title="" />
                                                </a>
                                            </div>
                                            <p>
                                                Surge así la propuesta de territorios, vistos como espacios generadores de símbolos culturales, lugares de encuentro, experimentación, juego y participación.  Soporte físico donde se desarrollan y manifiestan hechos estéticos.<br/>
                                                Los territorios se concretan en diferentes espacios y son:
                                                Territorio de Juegos con Agua, Territorio de Juegos con Arena, Territorio de los Planos Inclinados, Territorio de los Espejos, Territorio de las Piedras y los Dinosaurios, Territorio de las Construcciones,  Territorio de la Luz, Territorio de las Composiciones, etc .
                                            </p>
                                            <div class="margin-top">
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto07.jpg">
                                                    <img class="img-l1" src="img/plataforma/como-trabajamos/foto07.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/como-trabajamos/foto08.jpg">
                                                    <img class="img-l2" src="img/plataforma/como-trabajamos/foto08.jpg" alt="" title="" />
                                                </a>
                                            </div>
                                        </section>

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
    </body>
</html>
