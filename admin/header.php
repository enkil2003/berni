<header id="header-page">
    <div id="inner-header" class="cfix">
        <div id="left-header">
            <a href="index.php">
                <img src="img/logo.png" class="vertical-align-middle" alt="" title="" />
                <span id="title-span" class="vertical-align-middle">Fabulinus - Berni</span>
            </a>
            <a id="bttn-barra" href="#">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div id="right-header">
            <a id="user" href="#">
                <figure id="photo-user">
                    <img src="img/icons/avatar-blank.jpg" alt="" title="" />
                </figure>
                <p id="name-user"><?php echo $_SESSION['colegio_username']; ?></p>
                <i class="fa fa-caret-down"></i>
            </a>
            <div id="box-user" class="cfix">
                <i id="box-up" class="fa fa-caret-up"></i>
                <ul id="inner-box">
                    <li>
                        <a href="<?php echo dameURL(); ?>">
                            <i class="fa fa-link"></i>Visitar sitio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cog"></i>Configuración
                        </a>
                    </li>
                    <li>
                        <a href="../login/logout.php">
                            <i class="fa fa-power-off"></i>Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header><!-- END: header -->