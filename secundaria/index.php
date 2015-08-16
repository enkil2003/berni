<?php
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Filosofia';
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
                                        <h1>FILOSOFÍA</h1>
                                        <p>En el  colegio <i>ANTONIO BERNI</i>,  la educación secundaria es considerada como un tiempo de
                                            oportunidades para formarse en un espacio académico que reconoce y vehiculiza  el <span class="higher">potencial
                                            adolescente</span>.<br/>Nuestros  distintos momentos de <span class="higher">aprendizaje, investigación y apropiación de
                                            conocimientos</span> apuntan a una tendencia humanística y de formación académica  consistente,
                                            echando mano a la  creatividad y a las experiencias continuas con los adolescentes en la comunidad.
                                        </p>

<div class="imageHolder">
    <img src="" width="282px" height="204px"/>
    <img src="" width="282px" height="204px"/>
</div>

                                        <ul class="list-circle margin-top margin-bottom">
                                            <li>La construcción del conocimiento es promovida desde la <i>participación activa de los estudiantes</i>,
                                                en vinculación con el lenguaje de  las diversas ciencias.
                                            </li>
                                            <li>El  proceso <i>creativo</i> se desprende de los diferentes lenguajes del Arte.</li>
                                        </ul>
                                        <p>El colegio secundario es, para nuestra propuesta, un espacio donde <i>apropiarse, transitar y
                                            valorizar</i> las diferentes etapas de la adolescencia, comprometiendo a los jóvenes en
                                            proyectos variados con implicancias en lo académico curricular como instancia a la vez, <span class="higher">cognitiva y creadora</span>.
                                        </p>
                                        <ul class="list-circle margin-top margin-bottom">
                                            <li>Nuestra iniciativa propone un espacio de diálogo y trabajo conjunto
                                                entre especialistas, artistas, docentes y estudiantes.
                                            </li>
                                        </ul>
                                        <p>Con el propósito de construir el significado de las acciones en un clima de respeto y
                                            solidaridad  gestamos recorridos y abordajes pedagógicos en torno a diferentes temáticas:
                                        </p>
                                        <ul class="list-circle margin-top margin-bottom small-list">
                                            <li>Globalización, salud y  medio ambiente</li>
                                            <li>Arte y mundo contemporáneo</li>
                                            <li>Ciudadanía y cultura urbana</li>
                                            <li>Ciberculturas</li>
                                        </ul>
                                        <p>Es en  la filosofía propia de la <b>Educación por el arte</b> donde ubicamos nuestra propuesta pedagógica:</p>
                                        <ul class="list-circle margin-top margin-bottom">
                                            <li>Entendemos el campo del arte como una forma específica de conocimiento y de
                                                producción de sentido, que contribuye a alcanzar competencias que permiten
                                                desarrollar la capacidad de abstracción, la construcción de un pensamiento propio, la
                                                apropiación de significados y valores culturales - la elaboración y comprensión de mensajes superadores.
                                            </li>
                                        </ul>


                                        <h2>Perfil del Egresado</h2>
                                        <p>El objetivo es que nuestros egresados sean capaces de comprender contextos diversos,
                                            interpretar realidades y discursos, desarrollar <span class="higher">proyectos autónomos</span>.
                                        </p>
                                        <h2>Nuevas tecnologías</h2>
                                        <ul class="list-circle margin-top margin-bottom">
                                            <li>El eje tecnológico es fundamental en la propuesta: las nuevas tecnologías, sus
                                                posibilidades y la responsabilidad en sus usos, son un eje integrador de la propuesta pedagógica.
                                            </li>
                                        </ul>
                                        <p>Nuestra perspectiva educativa concibe la Comunicación y la apropiación de las nuevas tecnologías en un
                                            plan de estudios donde las ciencias sociales, el arte, las ciencias exactas y las ciencias aplicadas,
                                            dialogan e interactúan permanentemente.
                                        </p>
                                        <h2>En el Colegio Secundario trabajamos:</h2>
                                        <ul class="list-circle margin-top small-list">
                                            <li>La investigación y la resolución de problemas de manera autónoma</li>
                                            <li>La búsqueda y la selección crítica de la información</li>
                                            <li>La posibilidad de adquirir el idioma inglés en forma oral y escrita en situaciones de conocimiento y
                                                actividades expresivas
                                            </li>
                                            <li>La creatividad artística y literaria</li>
                                            <li>El compromiso con la puesta en práctica de proyectos comunitarios</li>
                                        </ul>
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
