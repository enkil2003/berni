<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Proyectos';
// Active class on nav
$active = 5; ?>
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
                                    <article id="proyectos"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">PROYECTOS ESPECIALES</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </article><!-- END: dinamic => [CONTENT] -->
                                    <section id="artes-sonoras" class="margin-top margin-bottom">
                                        <h2 class="margin-bottom">Artes sonoras</h2>
                                        <p>Formamos un área de desarrollo de las disciplinas sonoro- musicales, donde los niños y jóvenes incorporan herramientas técnicas en el campo de la formación instrumental además de herramientas discursivas y expresivas dentro del propio lenguaje de la Música. Llevamos adelante los siguientes Talleres:</p>
                                        <ul class="margin-top list-circle">
                                            <li>Taller de Percusión,</li>
                                            <li>Taller de Canto,</li>
                                            <li>Taller de Guitarra y</li>
                                            <li>Taller de Apreciación Creativa de la Música</ul>
                                    </section>
                                    <section id="ludoteca" class="margin-top margin-bottom">
                                        <h2 class="margin-bottom">Ludoteca</h2>
                                        <p>La ludoteca es un espacio que pone a trabajar los límites, la convivencia, la formación de la ciudadanía. Durante los recreos ponemos a disposición de los niños materiales que facilitan el juego y la convivencia. Creemos que el juego reglado permite el desarrollo de la capacidad simbólica y pone en acto la función de los límites, ya que aceptar y respetar las reglas, por un lado permite el juego y por otro, obliga a reconocer que “no vale todo” o las cosas no siempre pueden ser “como yo quiero”.</p>
                                    </section>
                                    <section id="espacio-padres">
                                        <h2 class="margin-bottom">Espacio de reflexión para padres</h2>
                                        <p>Es necesario el diálogo para alcanzar acuerdos sobre los mensajes que queremos transmitir. Para ello desde hace unos años funciona el espacio de reflexión con padres “Chicos chicos, problemas chicos. Chicos grandes, ¿problema de ellos?” en el que una vez por mes los padres y profesionales de la escuela ponemos en debate los temas que nos preocupan en relación a los chicos.</p>
                                    </section>
                                    <section id="natacion" class="margin-top margin-bottom">
                                        <h2 class="margin-bottom">Natación</h2>
                                        <p>Dentro de nuestro programa de Educación Física, los chicos realizan actividades lúdicas y de aprendizaje de estilos en el medio acuático. Con el mismo equipo docente que los acompaña en el resto de las actividades deportivas, se realiza un seguimiento y evaluación continuos de la adquisición de los desplazamientos motrices en el agua.</p>
                                    </section>
                                    <section id="campamentos-viajes">
                                        <h2 class="margin-bottom">Campamentos y viajes de exploración</h2>
                                        <p>Un espacio para la construcción de la convivencia entre los niños y los docentes en el marco de una experiencia enriquecedora en contacto con la naturaleza. </p>
                                    </section>
                                    <section id="cafe-literario" class="margin-top margin-bottom">
                                        <h2 class="margin-bottom">Café Literario</h2>
                                        <p>Una vez al año convocamos a las familias a un espacio cultural – literario donde comparten con sus hijos una actividad de Taller preparada por ellos donde la lectura y la escritura son protagonistas. </p>
                                    </section>
                                    <section id="semana-berni">
                                        <h2 class="margin-bottom">Semana Berni</h2>
                                        <p>Todos los años durante la Semana del 13 al 16 de octubre celebramos la “SEMANA BERNI” coincidiendo así con el aniversario del fallecimiento de Antonio Berni (13 de octubre de 1981). Esta semana de trabajo intenso sobre la obra y pensamiento del artista tiene el propósito de generar tiempos y espacios concretos dedicados al estudio y conocimiento de quien fuera elegido para darle nombre a nuestra institución resignificando los motivos de dicha elección.</p>
                                    </section>
                                    <section id="semana-libro" class="margin-top margin-bottom">
                                        <h2 class="margin-bottom">Semana del libro</h2>
                                        <p>Con motivo del Dia del Libro todos los añós organizamos una Feria del Libro, que coincide con Visitas de narradores, Jornadas de Lectura Silenciosa sostenida, Creación Colectiva de cuentos etc., reafirmando nuestro compromiso diario con la formación de buenos lectores.</p>
                                    </section>
                                    <section id="territorios-juego">
                                        <h2 class="margin-bottom">Territorios de juego</h2>
                                        <p>En el ámbito de la primaria también sostenemos la importancia del juego y continuamos en 1er y 2do grado la propuesta de Territorios de Juego. Esta propuesta da lugar a experiencias de exploración, curiosidad, y proyectos colectivos de juego. Para los maestros es una rica ventana al pensamiento y mirada de los niños a partir de la que pueden plantear proyectos de trabajo que respondan a sus necesidades e intereses.</p>
                                    </section>
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
