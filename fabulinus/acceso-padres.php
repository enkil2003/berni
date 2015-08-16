<?php 
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Acceso Padres';
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
                                    <article id="acceso-padres"><!-- Dinamic => [CONTENT] -->
                                        <h1>Acceso Padres</h1>
                                        <section>
                                            <form id="login-form" class="margin-top cfix">
                                                <label>NOMBRE DE USUARIO</label>
                                                <input id="user" type="text" />
                                                <label>CONTRASEÑA</label>
                                                <input id="password" type="password" />
                                                <button id="login-button"></button>
                                            </form>
                                            <a id="lost-button-toggle" class="margin-top" href="#">Recorda nombre de usuario / contraseña</a>
                                            <form id="lost-form">
                                                <input id="lost-email" type="email" placeholder="Ingrese su correo electronico" />
                                                <button id="lost-button"></button>
                                            </form>
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
