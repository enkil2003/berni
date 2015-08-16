<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Berni y la comunidad';
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
                                    <article id="comunidad"><!-- Dinamic => [CONTENT] -->
                                        <h1>BERNI Y LA COMUNIDAD</h1>
                                        <section>
                                        <h2>Semana BERNI</h2>
                                            <p>En el recorrido del año, tomamos la semana de conmemoración del fallecimiento del gran artista plástico argentino Antonio Berni para recrear y  dialogar con su obra. Inspirados en distintos artistas plásticos,  obras contemporáneas a Berni y manifestaciones propias de los niños y adolescentes, abrimos el espacio cotidiano del Colegio para dar paso a la multiplicidad de lenguajes del arte y el debate social. Por medio de talleres, exhibiciones, performances, intervenciones en el patio y dependencias del colegio logramos inaugurar una dimensión de lo imaginario y lo simbólico, para cultivar el reconocimiento de la obra plástica como denuncia y revelación.</p>
                                        </section>
                                        <section>
                                        <h2>FA BE. Muestras DE ARTE</h2>
                                            <p>El modo de pensar estética y artísticamente  no es exclusivo de algunos pocos elegidos o talentosos sino que es parte de una cualidad humana que necesariamente requiere ser desarrollada en todos los sujetos.</p>
                                            <p>En este sentido, el arte es considerado en tanto portador y productor de sentidos sociales y culturales que se expresan en distintos formatos simbólicos estéticamente comunicables, denominados <b>lenguajes artísticos</b>. Entre ellos, pueden mencionarse –considerando los desarrollos históricos y las presencias contemporáneas: <b>la música, la plástica, el teatro, la danza, la literatura, los lenguajes audiovisual y multimedial</b>.</p>
                                            <p>Cada año realizamos dentro y fuera del colegio muestras de arte con una temática anual que nos caracteriza y nos da identidad. Construimos en cada muestra -  en su percepción y producción-  sentidos y  formas de circulación hacia nuevos modos de pensar, donde intervienen lo lúdico, la creatividad, la novedad y donde cada disciplina adquiere una real importancia. El respeto y la consideración por las obras de los alumnos, así como su exhibición son  principios fundamentales del Colegio Antonio Berni como espacio educativo democrático. </p>
                                        </section>
                                        <section>
                                        <h2>Orientación Vocacional</h2>
                                            <p>Los alumnos en  los espacios curriculares investigan acerca de las distintas instituciones educativas de nivel superior.  De esta forma, conocen las propuestas de las distintas instituciones y  cuentan con momentos para volcar sus inquietudes e intereses con un profesional que los problematiza. </p>
                                            <p>En este tiempo para pensar y diseñar el futuro es importante escuchar a los adolescentes y no apresurarlos en su elección.</p>
                                        </section>
                                        <section>
                                        <h2>Extensión a la Comunidad</h2>
                                            <p>Nuestra apuesta por la infancia y la adolescencia es la de formar estudiantes que no pierdan la curiosidad.    Protagonistas de su proceso de aprendizaje, descubridores y conquistadores del mundo de la lectura, la experimentación, la comprensión y el conocimiento de la creación artística. Nuestros valores conllevan la formación de un sujeto con clara identidad histórica, con competencias para la participación social, y con libertad para desarrollar su creatividad  en el espacio escolar y en instituciones cercanas donde realizan pasantías y encuentros con sectores sociales con necesidades y experiencias diferentes.</p><br/>
                                            <p><b>ITINERARIO DEL CICLO SUPERIOR DE LA ESCUELA SECUNDARIA<b/></p>
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
