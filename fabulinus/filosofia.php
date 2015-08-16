<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Filosofia';
// Active class on nav
$active = 2; ?>
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
                                        <section class="margin-bottom">
                                            <h2>Principios Teóricos</h2>
                                            <p class="margin-top margin-bottom">Nuestro Proyecto Pedagógico se encuentra sustentado por aportes teóricos que 
                                                consideramos relevantes  para nutrir nuestras prácticas docentes cotidianas, de modo de 
                                                crear así un jardín de infantes amable, activo, inventivo, habitable, documentado y comunicable. 
                                                Un lugar de investigación, aprendizaje y reflexión, un lugar en donde se encuentren bien los niños, 
                                                los educadores y las familias. Pretendemos estructurar una pedagogía relacional y 
                                                participativa de todos los miembros en la práctica pedagógica de la relación. Inspirados en las 
                                                teorías socio-constructivistas del aprendizaje y en la aventura educativa de las escuelas infantiles de 
                                                Reggio Emilia, reconocidas a nivel Internacional, concebimos al niño como un sujeto de derecho, 
                                                un sujeto de lenguajes, constructor activo de sus aprendizajes, valorando sus múltiples maneras de 
                                                aprender y expresarse.
                                            </p>
                                            <figure>
                                                <a class="popup" href="img/plataforma/foto01.jpg">
                                                    <img class="img-l1" src="img/plataforma/foto01.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/foto02.jpg">
                                                    <img class="img-l2" src="img/plataforma/foto02.jpg" alt="" title="" />
                                                </a>
                                            </figure>
                                        </section>
                                        <section>
                                            <h2>Principios que nos Orientan</h2>
                                            <article class="margin-top margin-bottom">
                                                <h3>La Imagen de Niño</h3><br/>
                                                <p>
                                                    Un niño fuerte, poderoso, competente, creativo, activo y social. 
                                                    Protagonista de sus propios aprendizajes, un niño co–constructor de conocimiento, identidad y cultura.
                                                </p>
                                            </article>
                                            <div>
                                                <a class="popup" href="img/plataforma/foto03.jpg">
                                                    <img class="img-l1" src="img/plataforma/foto03.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/foto04.jpg">
                                                    <img class="img-l2" src="img/plataforma/foto04.jpg" alt="" title="" />
                                                </a>
                                            </div>
                                            <article class="margin-top margin-bottom">
                                                <h3>Pedagogía de la escucha</h3><br/>
                                                <p class="margin-bottom">Fabulinus se enmarca en una filosofía y una praxis co-constructivista, que investiga 
                                                    pensando en proyectos y donde la concepción educativa otorga un gran valor a la relación entre niños, 
                                                    entre niños y adultos, entre adultos y adultos. Este proceso de vincularidad entre los maestros y los niños, 
                                                    tiene como concepto central “la escucha”.
                                                </p>
                                                <p><a class="popup" href="img/plataforma/foto05.jpg">
                                                    <img src="img/plataforma/foto05.jpg" class="left-img" alt="" title="" />
                                                    </a>La escucha como una actitud receptiva que presupone una mentalidad abierta, una 
                                                    disponibilidad para interpretar las actitudes y los mensajes de los niños y al mismo tiempo la 
                                                    capacidad de absorberlos y legitimarlos a través de proyectos como un modo de darles a los niños su 
                                                    protagonismo y la fuerza de su voz.
                                                </p>
                                            </article>
                                            <article class="margin-bottom">
                                                <h3>Rol del Maestro</h3><br/>
                                                <p>Un investigador constante de la cultura de la infancia que busca entender y 
                                                    comprender como aprenden los niños, como piensan, que los mueve y como se relacionan entre ellos.  
                                                    Fomentando en su práctica la pedagogía de la escucha, aportando materiales y creando condiciones para el 
                                                    aprendizaje.
                                                </p>
                                                <div class="margin-top">
                                                    <a class="popup" href="img/plataforma/foto06.jpg">
                                                        <img class="img-l1" src="img/plataforma/foto06.jpg" alt="" title="" />
                                                    </a>
                                                    <a class="popup" href="img/plataforma/foto07.jpg">
                                                        <img class="img-l2" src="img/plataforma/foto07.jpg" alt="" title="" />
                                                    </a>
                                                </div>
                                            </article>
                                            <article class="margin-bottom">
                                                <h3>El Ambiente Físico</h3><br/>
                                                <p>El ambiente va más allá de organizar espacios, materiales y tiempos, el 
                                                    ambiente es un espacio de visibilidad para una imagen de infancia llena de potencialidades, una 
                                                    estrategia educativa, un lugar donde los niños puedan experimentar, compartir, relacionarse, interactuar. 
                                                    Un lugar que promueve el sentido de pertenencia.
                                                </p>
                                            </article>
                                            <div>
                                                <a class="popup" href="img/plataforma/foto08.jpg">
                                                    <img id="img-fil" class="img-l1" src="img/plataforma/foto08.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/foto09.jpg">
                                                    <img class="img-l2" src="img/plataforma/foto09.jpg" alt="" title="" />
                                                </a>
                                            </div>
                                            <div class="margin-top-2">
                                                <a class="popup" href="img/plataforma/foto10.jpg">
                                                    <img class="img-full" src="img/plataforma/foto10.jpg" alt="" title="" />
                                                </a>
                                            </div>
                                            <article class="margin-top">
                                                <h3>La Documentación Pedagógica</h3><br/>
                                                <p>La documentación es una idea fundamental en Fabulinus, es la base del enfoque e 
                                                    involucra un diálogo democrático con las familias y la comunidad.  La documentación. 
                                                    Es la recopilación ordenada de datos fotográficos, audiovisuales, anecdóticos, pictográficos que 
                                                    evidencian el proceso de indagación y aprendizaje a nivel individual y colectivo.
                                                </p>
                                                <p>La documentación es vista como llave de lectura y valoración de los procesos de aprendizaje de 
                                                    los niños y como instrumento de interpretación.
                                                </p>
                                            </article>
                                            <div class="margin-top">
                                                <a class="popup" href="img/plataforma/foto11.jpg">
                                                    <img class="img-l1" src="img/plataforma/foto11.jpg" alt="" title="" />
                                                </a>
                                                <a class="popup" href="img/plataforma/foto12.jpg">
                                                    <img class="img-l2" src="img/plataforma/foto12.jpg" alt="" title="" />
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