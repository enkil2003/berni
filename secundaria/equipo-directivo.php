<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Equipo directivo';
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
                                        <h1 class="margin-bottom">Equipo directivo</h1>
                                        <section>
                                            <figure>
                                                <img src="img/plataforma/equipo-directivo.jpg" alt="Equipo Directivo" title="Equipo Directivo" />
                                            </figure>
                                            <h2>DIRECTIVOS DEL NIVEL SECUNDARIO</h2>
                                            <P>
                                                <b>Directora:</b> Lic. Valeria Pita,<br/>
                                                <b>Directora de Inglés:</b> Prof. Andrea Nuñez,<br/>
                                                <b>Vicedirectora:</b> Prof. Analía Delmoro,<br/>
                                                <b>Coordinadora del Área de Inglés:</b> Prof. Eliana Colomba,<br/>
                                                <b>Coordinador de Educación Física:</b> Prof. Tomás Luna,<br/>
                                                <b>Jefa de Preceptores:</b> Prof. Fabiana Tabares.<br/>
                                                <b>Secretaria:</b> Prof. Lorena Rivela,<br/>
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
