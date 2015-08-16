<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Quienes somos';
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
                                    <article id="quienes-somos"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">Quienes somos</h1>
                                        <p class="margin-bottom">El jardín Fabulinus, es una propuesta educativa que continúa en el 
                                            <span class="color-orange">Colegio Antonio Berni</span> 
                                            Educación Primaria y Secundaria.  Nuestro proyecto pedagógico está inspirado en la propuesta filosófica, 
                                            educativa y cultural de las escuelas municipales de <a href="http://www.reggiochildren.it/">Reggio Emilia</a> 
                                            en Italia.
                                        </p>
                                        <figure id="gallery-quienes-somos" class="cfix margin-bottom popup">
                                            <a id="img-1" class="popup" href="img/plataforma/Foto_1_795x545.jpg">
                                                <img src="img/plataforma/Foto_1_795x545.jpg" alt="" title="">
                                            </a>
                                            <a id="img-2" class="popup" href="img/plataforma/Foto_2_495x545.jpg">
                                                <img src="img/plataforma/Foto_2_495x545.jpg" alt="" title="">
                                            </a>
                                        </figure>
                                        <p class="margin-bottom">El jardín Fabulinus, logró plasmar desde sus inicios, allá por el año 1998 una 
                                            forma particular de concebir el aprendizaje de los niños a través de propuestas y proyectos originales, 
                                            pensando a la escuela como un ámbito de enseñanza y aprendizaje, de relaciones, de comunicación y de investigación.
                                        </p>
                                        <p class="margin-bottom">
                                            <a id="img-3" class="popup" href="img/plataforma/FOTO_3-quienes_somos-525x450.jpg">
                                                <img src="img/plataforma/FOTO_3-quienes_somos-525x450.jpg" alt="" title="">
                                            </a>
                                        </p>
                                        <p class="margin-top margin-bottom">En nuestro abordaje,  implementamos la dinámica de territorios de 
                                            juego y exploración, el trabajo por proyectos y la documentación pedagógica. En Fabulinus, los maestros y 
                                            directivos reflexionamos constantemente nuevos enfoques para profundizar sobre los contenidos y sus 
                                            didácticas, que nos permiten realizar innovaciones en el ámbito educativo.
                                        </p>
                                        <figure class="cfix margin-bottom">
                                            <a id="img-4" class="popup" href="img/plataforma/FOTO-4-quienes_somos-410x350.jpg">
                                                <img src="img/plataforma/FOTO-4-quienes_somos-410x350.jpg" alt="" title="">
                                            </a>
                                            <a id="img-5" class="popup" href="img/plataforma/Foto_5-quienes_somos-410x350.jpg">
                                                <img src="img/plataforma/Foto_5-quienes_somos-410x350.jpg" alt="" title="">
                                            </a>
                                            <a id="img-6" class="popup" href="img/plataforma/FOTO_6-quienes_somos-410x350.jpg">
                                                <img src="img/plataforma/FOTO_6-quienes_somos-410x350.jpg" alt="" title="">
                                            </a>
                                        </figure>
                                        <section class="margin-bottom">
                                            <h3>Quienes somos</h3><br/>
                                            <p class="margin-bottom">Un equipo profesional de primera infancia, comprometido con la educación de calidad que afronta este proyecto, desde la experiencia previa, el conocimiento profesional y el compromiso personal.<br/>
                                                Un equipo donde se aúnan esfuerzos para el desarrollo del proyecto del jardín de Infantes, asumiendo diferentes responsabilidades y compromisos, maestras, músicos, psicomotricistas, profesores de educación física, profesoras de Danzas, ceramistas, narradores, etc.<br/>
                                                Un equipo de maestros que investiga, aprende y propone.  Con docentes en formación permanente a través de capacitaciones y congresos Nacionales e Internacionales.</p>
                                            <p>Directivos:</p>
                                            <p> Prof. Alejandra Dubovik</p>
                                            <p>Prof. Alejandra Cippitelli</p>
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
