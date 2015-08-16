<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Talleres';
// Active class on nav
$active = 4; ?>
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
                                    <article id="talleres"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">TALLERES</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <section id="huerta" class="margin-top margin-bottom">
                                            <h2 class="margin-bottom">Huerta</h2>
                                            <p>Los chicos trabajan junto a sus docentes y con el asesoramiento de un papá de la institución en el proyecto de “<b>Huerta</b>”. En este espacio pueden hacer observaciones y experiencias directas, tomarla como ejemplo de un proyecto sustentable, y participar en la separación y clasificación de residuos a partir de los cuales se elabora el compost o abono orgánico. Para ello en la Escuela tenemos recipientes diferenciados por color para disponer los residuos durante la jornada escolar en los recreos, y los provenientes del sector de la cocina y el Comedor.
                                                Sin dudas llevar adelante este Proyecto es un hermoso desafío al que nos impulsa también la idea de que los niños puedan experimentar algo de la circularidad de los tiempos de la Naturaleza que imponen observar, esperar, planificar, cuidar, respetar, marcando un franco contraste con las experiencias actuales de consumo, fragmentación y fugacidad.</p>
                                        </section>
                                        <section id="arte-sociedad">
                                            <h2 class="margin-bottom">Arte y sociedad</h2>
                                            <p>Se trata, ante todo, de “profundizar” los hechos históricos abordándolos en su complejidad y en la interrelación existente entre el ámbito artístico y social, vinculándolos al conocimiento de las obras de arte producidas en el mismo período</p>
                                        </section>
                                        <section id="talleres-instrumentos" class="margin-top margin-bottom"> 
                                            <h2 class="margin-bottom">Talleres de instrumentos</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </section>
                                        <section id="orquesta">
                                            <h2 class="margin-bottom">Orquesta</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </section>
                                        <section id="obras-arte-producidas" class="margin-top">
                                            <h2 class="margin-bottom">Obras de arte producidas</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </section>
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
