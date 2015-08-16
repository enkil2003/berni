<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Filosifia';
// Active class on nav
$active = 1; ?>
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
                                    <article id="filosofia"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">FILOSOFÍA</h1>
                                        <p class="margin-bottom">En 2002 comenzó el desafío de continuar el proyecto innovador del Jardín Fabulinus en  una Escuela Primaria. Así el Colegio Antonio Berni,  nace con el compromiso de dar cauce a la creación de una educación participativa que enseñe a aprender con placer y amor hacia el conocimiento, a través del arte y del juego. Nuestro proyecto educativo conlleva la idea de innovar en la Educación Formal.
                                        </p>
                                        <figure class="gallery-4 gallery-parent cfix">
                                            <a href="img/plataforma/1-1.jpg">
                                                <img src="img/plataforma/1-1.jpg" alt="" title="Titulo 1">
                                            </a>
                                            <a href="img/plataforma/1-2.jpg">
                                                <img src="img/plataforma/1-2.jpg" alt="" title="Titulo 2">
                                            </a>
                                            <a href="img/plataforma/1-1.jpg">
                                                <img src="img/plataforma/1-1.jpg" alt="" title="Titulo 3">
                                            </a>
                                            <a href="img/plataforma/1-2.jpg">
                                                <img src="img/plataforma/1-2.jpg" alt="" title="Titulo 4">
                                            </a>
                                        </figure>
                                        <figure class="margin-bottom margin-top">
                                            <img src="img/plataforma/1-1.jpg" alt="" title="Titulo 2">
                                        </figure>
                                        <p>Tanto el Colegio Antonio Berni como el Jardín Fabulinus se inspiran en la 
                                            filosofía de las escuelas de <a href="#">Reggio Emilia</a>.
                                        </p>
                                        <p>Pilares de las escuelas de Reggio Emilia:</p>
                                        <ul class="list-circle margin-top margin-bottom">
                                            <li>Pedagogía de la escucha</li>
                                            <li>El ambiente como “lenguaje silencioso”</li>
                                            <li>“Los cien lenguajes del niño”</li>
                                            <li>Hacer el aprendizaje visible a través de la documentación</li>
                                            <li>El docente como investigador</li>
                                            <li>La Participación</li>
                                            <li>Valoración de la diversidad y la complejidad</li>
                                        </ul>
                                        <p>y en la filosofía propia de la <b>Educación por el arte</b>;</p>
                                        <p class="margin-bottom">El arte se constituye en un mediador privilegiado para la construcción del conocimiento, ya que le permite al niño nuevas posibilidades para la expresión y la creación.</p>
                                        <p>Entendemos el campo del arte como una forma específica de conocimiento y de producción de sentido, que contribuye a alcanzar competencias que permiten desarrollar la capacidad de abstracción, la construcción de un pensamiento crítico divergente, la apropiación de significados y valores culturales y la elaboración y comprensión de mensajes significativos en un contexto socio- histórico- cultural determinado.</p>
                                    </article><!-- END: dinamic => [CONTENT] -->
                                </div>
                            </div>
                        </section>
                        <?php include '../interfaz/aside.php'; ?>
                    </main><!-- END: MAIN => [CONTENT] -->
                </div>
                <?php include 'buttons.php'; ?>
            </div>
            <?php include 'footer.php'; ?>
        </div><!-- END: wrapper -->
    </body>
</html>
