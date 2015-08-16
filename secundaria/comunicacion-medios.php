<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Comunicacion y medios';
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
                                    <article id="comunicacion-medios"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">COMUNICACIÓN Y MEDIOS</h1>
                                        <p>1.- Nuevas Tecnologías de la Información</p>
                                        <p>2.- Talleres y Observatorios</p>
                                        <p>La inclusión de Talleres y Observatorios dentro del itinerario de la orientación en Comunicación parte de la necesidad de ofrecer a los alumnos canales de expresión y desarrollo artístico e intelectual. Favoreciendo  una formación que acompaña el creciente avance de la tecnología, el predominio de la información en redes y los medios masivos como la radio, la TV y medios gráficos tan presentes en la vida cotidiana.</p>
                                        <p>El trabajo en los talleres y observatorios se inicia en una instancia recreativa y evoluciona hacia producciones especializadas de mayor complejidad, así los chicos comienzan a gestionar sus ensambles, performances, muestras y producciones con variados estilos.</p>
                                        <p>3.- Blogs</p>
                                        <p>4.- Videos</p>
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
