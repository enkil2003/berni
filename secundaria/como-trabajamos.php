<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Como trabajamos';
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
                                    <article id="como-trabajamos"><!-- Dinamic => [CONTENT] -->
                                        <h1>CÓMO TRABAJAMOS</h1>
                                        <section>
                                            <h2>Debate y trabajo grupal</h2>
                                            <p>En las aulas pretendemos lograr una verdadera transmisión, acercarle al estudiante las herramientas que les permitan afrontar los desafíos del aprendizaje en grupos y dialógico. A partir de la posibilidad de conocer el pasado, en las clases suelen cuestionar los formatos escolares tradicionales. Ofreciendo un espacio de libertad para el debate y una base cultural que inquieta a los estudiantes, así los docentes desde los contenidos de la cultura, dan lugar al re encuentro con los saberes y a la proyección a futuro de nuevos recorridos educativos. </p>
                                        </section>
                                        <section>
                                            <h2>Foros</h2>
                                            <p>Oralidad y escritura están íntimamente relacionadas en nuestra pedagogía,  por eso los espacios destinados a los Foros otorgan la exclusividad de la palabra a algunos estudiantes que preparan temáticas en base a  lecturas y a las nuevas tecnologías de la información.</p>

                                            <p>De cada módulo de aprendizaje exploran las diversas conexiones, más amplias o más precisas que pueden trazarse entre las ciencias y las artes. El período de fin de trimestre juega  también a favor de una participación más activa en este intercambio que toma a cada núcleo de aprendizajes como referencia.</p>

                                            <p>Empezamos planteando algunas instancias y algunas categorías particulares de las unidades trabajadas  que pueden recuperarse con interés para profundizar algunas de las ideas, los conceptos y los análisis de las lecturas en torno de la temática seleccionada.  Ejemplos de temáticas trabajadas en los foros son: Problemas ambientales,  Cambios culturales en los períodos de entre guerras, Globalización y ciber culturas, la evolución industrial, fuentes de energía y recursos naturales, etc.</p>
                                        </section>
                                        <section>
                                            <h2>Experiencias directas (laboratorio, museos, paseos)</h2>
                                            <p>Existen proyectos de trabajo semanal, mensual, anual, con los adolescentes, de formación docente y con los padres en experiencias directas.</p>
                                            <p>El ambiente y los espacios son seleccionados para motivar  y  evocar en los estudiantes la curiosidad acerca del mundo “más allá de la escuela”. Así se conectan con profesionales que nos visitan, museos, muestras, casa de las artes, safari fotográfico y paseos para ampliar el universo cultural y que “el aula salga al mundo”.</p>
                                        </section>
                                        <section>
                                            <h2>Deportes</h2>
                                            <p>El proyecto del área promueve diversas experiencias que contribuyen al conocimiento del manejo del cuerpo, del espacio y de sus propias posibilidades de movimiento para el mejoramiento de la calidad de vida de los jóvenes. El trabajo en equipo y los juegos reglados los ayudan a aceptar pautas y contribuyen al desarrollo de aptitudes para una buena convivencia.</p>
                                            <ul class="list-circle">
                                                <li>Deportes de equipo (handball, voley, fútbol)</li>
                                                <li>Deportes de equipo con entrenamiento semanal (hockey/ volley ball: mujeres/ rugby y fútbol: varones)</li>
                                                <li>Destrezas sobre  colchoneta</li>
                                                <li>Atletismo.</li>
                                                <li>Entrenamiento de las capacidades motoras ( fuerza, resistencia, coordinación, velocidad y flexibilidad)</li>
                                                <li>Ejercicios Aeróbicos</li>
                                                <li>Encuentros Intercolegiales</li>
                                            </ul>
                                            <p>Complementamos las instalaciones deportivas que dispone el colegio para realizar las clases de Educación Física, con  espacios externos que cuentan con una importante infraestructura e instalaciones contratadas especialmente para la actividad.</p>
                                        </section>
                                        <section>
                                            <h2>REMO Y CANOTAJE</h2>
                                            <p>Dentro de nuestro programa de Educación Física, los chicos realizan actividades físicas y de aprendizaje de este deporte  en el medio acuático. Con el mismo equipo docente que los acompaña en el resto de las actividades deportivas, se realiza un seguimiento y evaluación continuos de la adquisición de las habilidades náuticas.</p>
                                        </section>
                                        <section>
                                            <h2>VIDA EN LA NATURALEZA</h2>
                                            <p>Actividades de aventura y extensión deportiva</p>

                                            <p>Los docentes acompañan el recorrido desde los campamentos que vinculan deportes, las caminatas y ascensos, destrezas y habilidades tales como la realización de fogones, cabullería (nudos y amarres), pionerismo (construcciones rústicas individuales y comunitarias), normas de seguridad necesarias en todo traslado.</p>

                                            <p>Actividades desde una perspectiva ambiental</p>

                                            <p>Durante las jornadas previas y en el territorio donde se realiza el campamento los chicos realizan estudios del medio, actividades inter y transdisciplinarias, intercambios, charlas, visitas, juegos y ejercicios de comunicación.</p>
                                        </section>
                                        <section>
                                            <h2>ITINERARIO DEL CICLO INICIAL DE LA ESCUELA SECUNDARIA</h2>
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
