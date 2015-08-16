<header class="cfix"><!-- Header -->
    <nav id="navigation">
        <a id="button-mobile" title="Menu" href="#"><i class="fa fa-bars"></i> MENU</a>
        <ul id="list-navigation" class="cfix">
            <li class="<?php if($active==1){ echo 'active'; } ?>">
                <a id="bttnN1" class="<?php if($active==1){ echo 'active'; } ?>" href="index.php"><span>FILOSOFÍA</span></a>
                <img class="flecha-nav" src="../interfaz/img/icons/mark.png" alt="" title="" />
            </li>
            <li class="<?php if($active==2){ echo 'active'; } ?>">
                <a id="bttnN2" class="<?php if($active==2){ echo 'active'; } ?>" href="como-trabajamos.php"><span>CÓMO TRABAJAMOS</span></a>
                <img class="flecha-nav" src="../interfaz/img/icons/mark.png" alt="" title="" />
            </li>
            <li class="<?php if($active==3){ echo 'active'; } ?>">
                <a id="bttnN3" class="<?php if($active==3){ echo 'active'; } ?>" href="departamentos.php"><span>DEPARTAMENTOS</span>
                    <i class="fa fa-chevron-down fa-rotate-180"></i></a>
                <img class="flecha-nav" src="../interfaz/img/icons/mark.png" alt="" title="" />
                 <div class="submenu"><!-- Submenu -->
                    <ul class="navigation-submenu">
                        <li><a href="#lenguajes"><span>Lenguajes</span></a></li>
                        <li><a href="#ciencias-exactas"><span>Ciencias exactas y naturales</span></a></li>
                        <li><a href="#ciencias-sociales"><span>Ciencias sociales y ciudadanía activa</span></a></li>
                        <li><a href="#artes-cultura"><span>Artes y cultura</span></a></li>
                        <li><a href="#informatica"><span>Informatica</span></a></li>
                    </ul>
                </div><!-- END: submenu -->
            </li>
            <li class="<?php if($active==4){ echo 'active'; } ?>">
                <a id="bttnN4" class="<?php if($active==4){ echo 'active'; } ?>" href="comunidad.php"><span>BERNI Y LA COMUNIDAD</span></a>
                <img class="flecha-nav" src="../interfaz/img/icons/mark.png" alt="" title="" />
            </li>
            <li class="<?php if($active==5){ echo 'active'; } ?>">
                <a id="bttnN5" class="<?php if($active==5){ echo 'active'; } ?>" href="comunicacion-medios.php"><span>COMUNICACIÓN Y MEDIOS</span></a>
                <img class="flecha-nav" src="../interfaz/img/icons/mark.png" alt="" title="" />
            </li>
        </ul>
    </nav>
    <div id="logo" class="cfix">
        <div id="left-logo" class="table">
            <figure class="table-cell">
                <img id="logo-img" src="img/logo-berni-secundaria.png" alt="Secundaria" title="Secundaria" />
            </figure>
        </div>
        <figure id="right-logo">
            <img id="nube1" src="../interfaz/img/plataforma/nube1.png" alt="Cloud" title="Cloud" />
            <img id="nube2" src="../interfaz/img/plataforma/nube2.png" alt="Cloud" title="Cloud" />
            <img id="nube3" src="../interfaz/img/plataforma/nube3.png" alt="Cloud" title="Cloud" />
        </figure>
    </div>
</header><!-- END: header -->
