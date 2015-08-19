<?php
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Ingles';
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
                                    <article id="ingles"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">INGLÉS</h1>
                                        <p class="margin-bottom">Creemos que la Lengua es Comunicación. De allí que abordamos la enseñanza de un segundo idioma desde un enfoque
                                            con el cual se genera la necesidad de expresión, respetando los tiempos de evolución individual y social, en un ámbito que los motiva
                                            y desafía al uso de todas sus capacidades de expresión. De esta forma logramos adaptar cada estructura y unidad de aprendizaje a las
                                            capacidades e intereses de los chicos, haciendo del aprendizaje un acto significativo, natural, activo, espontáneo y principalmente
                                            placentero.
                                        </p>
                                        <p class="margin-bottom">Este proceso se ve enriquecido por los diversos recursos que, bajo un mismo proyecto temático a lo largo del año,
                                            va apelando a la creatividad y el arte:
                                        </p>

                                            <ul class="list-circle margin-top margin-bottom small-list">
                                                <li>FIRST TERM PROJECT</li>
                                                <li>THEMATIC BOOK</li>
                                                <li>LITERATURE PROJECT</li>
                                            </ul>
                                        <p>A medida que los chicos comienzan a manejar el idioma y van descubriendo su potencialidad es que avanzan hacia un Nuevo desafío: la preparación para
                                            presentarse al primer examen internacional de Cambridge, KET, que rendirán al finalizar el Ciclo Primario.
                                        </p>
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
