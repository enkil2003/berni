<aside>
    <ul id="links-aside">
        <li>
            <a href="equipo-directivo.php">Equipo Directivo</a>
        </li>
        <li>
            <a href="acceso-padres.php">Acceso Padres</a>
        </li>
        <li>
            <?php if(empty($_SESSION['colegio_username'])){ echo '<a href="../login/">Acceso Docentes</a>'; }
            else { echo '<a href="../admin/index.php">Adminstrador</a>'; } ?>
        </li>
        <li>
            <a href="videos.php">Videos</a>
        </li>
        <li>
            <a href="fotos.php">Fotos</a>
        </li>
        <li>
            <a href="mapa.php">Mapa</a>
        </li>
        <li>
            <a href="../blog/">Blog</a>
        </li>
    </ul>
</aside><!-- END: Aside -->