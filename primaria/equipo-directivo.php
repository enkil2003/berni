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
                                        <h1 class="margin-bottom">Equipo Directivo</h1>
                                        <section>
                                            <figure>
                                                <img src="img/plataforma/equipo-directivo.jpg" alt="Equipo Directivo" title="Equipo Directivo" />
                                            </figure>
                                            <h2>DIRECTIVOS DEL NIVEL PRIMARIO</h2>
                                            <P>
                                                <b>Director:</b> Lic. Juan Manuel Centeno,<br/>
                                                <b>Vicedirectora:</b> Lic. María Eugenia Zapata,<br/>
                                                <b>Coordinad. de Inglés del 1º ciclo:</b> Prof. Virginia Fernández Varela,<br/>
                                                <b>Coordinadora de Inglés del 2do ciclo:</b> Prof. Natacha Sañudo,<br/>
                                                <b>Coordinadora del Área Música:</b> Prof. Andrea Grynberg,<br/>
                                                <b>Coordinadora del Área de Plástica:</b> Prof. Patricia Temprano,<br/>
                                                <b>Coordinador de Educación Física:</b> Prof. Néstor Boaventura,<br/>
                                                <b>Psicóloga:</b> Lic. Carolina Ferreyra,<br/>
                                                <b>Secretaria:</b> Prof. Verónica Tanzi,<br/>
                                                <b>Secretaria:</b> Loreley Cabrera.<br/>
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
