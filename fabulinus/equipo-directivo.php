<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Equipo Directivo';
// Active class on nav
$active = null; ?>
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
                                    <article id="equipo-directivo"><!-- Dinamic => [CONTENT] -->
                                        <h1 class="margin-bottom">Equipo Directivo</h1>
                                        <section>
                                            <figure>
                                                <a class="popup" href="img/plataforma/equipo-directivo.jpg">
                                                    <img src="img/plataforma/equipo-directivo.jpg" 
                                                         alt="Equipo Directivo" title="Equipo Directivo" />
                                                </a>
                                            </figure>
                                            <h2>DIRECTIVOS DEL NIVEL INICIAL</h2>
                                            <P>
                                                <b>Directora:</b> Prof. Alejandra Dubovik,<br/>
                                                <b>Directora:</b> Prof. Alejandra Cippitelli,<br/>
                                                <b>Coordinadora de Inglés:</b> Prof. Virginia Fernández Varela,<br/>
                                                <b>Coordinadora Salas de 2 y 3 años:</b> Prof. Andrea Amoretti,<br/>
                                                <b>Coordinadora Salas de 4 años:</b> Prof. Pamela Iglesias,<br/>
                                                <b>Coordinadora Salas de 5 años:</b> Prof. Guadalupe Ovalle,<br/>
                                                <b>Coordinador de Eduacación Física:</b> Prof. Néstor Boaventura<br/>
                                                <b>Coordinadora del Área de Música:</b> Prof. Andrea Grynberg<br/>
                                                <b>Secretaria:</b> Prof. Pamalea Sañudo,<br/>
                                                <b>Secretaria:</b> Prof. Verónica Tanzi,<br/>
                                            </P>
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
