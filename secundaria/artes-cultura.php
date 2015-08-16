<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Artes y cultura';
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
                                    <article id="artes-cultura"><!-- Dinamic => [CONTENT] -->
                                        <h1>Artes y cultura</h1>
                                        <section>
                                            <h2>Artes Plásticas: Pintura, Collage, Grabado</h2>
                                            <p>La educación artística se nutre de experiencias más actuales en diseño de imágenes y reconocimiento de la historia del arte y sus manifestaciones.</p>

                                            <p>La percepción visual es una actividad compleja indisociable del conocimiento y la interpretación, que se construye y ocurre en un contexto situacional. El universo visual enseña a mirar y a mirarse, y ayuda a los alumnos a construir representaciones sobre sí mismos y sobre el mundo. La idea de la mirada como una práctica social, como algo fundado y localizado culturalmente, amplía considerablemente el universo visual hacia la gran diversidad de las formas de arte y diseño del mundo contemporáneo.</p>
                                        </section>
                                        <section>
                                            <h2>Artes Sonoras: Orquesta</h2>
                                            <p>Formamos un área de desarrollo de las disciplinas sonoro- musicales, donde los niños y jóvenes incorporan herramientas técnicas en el campo de la formación instrumental además de herramientas discursivas y expresivas dentro del propio lenguaje de la Música.</p>
                                            <p>Buscamos aunar los contenidos técnicos y estéticos con vivencias provenientes de otras instancias de formación integradoras y de producción y exposición.</p>
                                        </section>
                                        <section>
                                            <h2>Artes Combinadas: TEATRO</h2>
                                            <p>Se trata de un espacio destinado a la exploración, la búsqueda de experiencias combinadas y el juego. Para crear y crecer, el arte dramático le da al adolescente posibilidades de descubrir de otra manera su emotividad, afectividad, sensibilidad e imaginación.</p>
                                            <p>Los talleres artísticos por su naturaleza, cumplen variadas funciones que hacen a la formación individual de los participantes en lo referente a la capacidad de expresarse, el intercambio de conocimientos, el refinamiento del gusto, el reconocimiento del trabajo grupal.</p>
                                        </section>
                                        <section>
                                            <h2>CINE DEBATE</h2>
                                            <p>El debate estético y de contenido son de gran importancia en la escuela secundaria al darnos la posibilidad de encontrarnos con un cine más comprometido y que requiere de nuevas miradas adolescentes y adultas.</p>
                                            <p>Es por ello que en nuestro colegio secundario hemos decidido programar un ciclo de cine-debate con todos los alumnos - y los docentes que estén presentes ese día- . Las películas son seleccionadas en función de que abarquen temáticas atinentes a la subjetividad humana tales como: el mundo del trabajo, la sexualidad, el amor, la relación con los adultos y la autoridad, la relación con la ley, etc.</p>
                                            <p>Entendemos que la narrativa es en este sentido un vehículo privilegiado, que nos involucra, nos interroga, nos emociona y nos deja pensando –en muchos casos- sobre el mundo, nuestra vida y nuestras relaciones, nuestros ambientes y prácticas. </p>
                                            <p>Contextos, conflictos, personajes y tramas de intereses y afectos que nos permiten ver fuera de nuestra existencia diaria un conjunto de dispositivos sociales y personales que iluminan e interpelan nuestros mundos cotidianos y nuestras certezas en torno de los mismos.</p>
                                        </section>
                                        <section>
                                            <h2>TUTORÍAS</h2>
                                            <p>Entendemos los límites como una operación necesaria y fundante del ser humano cuya función es proveernos de un marco lógico para la convivencia.</p>

                                            <p>En este sentido, el  trabajo tutorial  permite el acompañamiento pedagógico y el diseño de trayectos dentro y fuera del aula que conduzcan a  una mejor apropiación de los saberes académicos a la vez que  pone en acto la función de los límites. Los docentes y el equipo directivo establecen reglas y recorridos que transmiten nuevas oportunidades para encarar la convivencia institucional, utilizando los contenidos de la cultura para  “mediar” entre la potencialidad del adolescente y  proyectos desenvueltos en una coherencia entre la tarea pedagógica y la normativa.</p>

                                            <p>Las reuniones tutoriales reúnen a nuestro equipo docente en el diálogo con  aportes teóricos  y  recursos que consisten en reforzar aquellos límites que se encuentran en el acto mismo de la enseñanza y que les dan al adolescente  la oportunidad de jugar un deporte reglado, de tocar un instrumento, de encontrar sus raíces en una clase de historia, o de descubrir algo por lo que valga la pena hacer el esfuerzo de estudiar.</p>
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
