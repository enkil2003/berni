<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */

include '../interfaz/functions.php';

session_unset();
session_destroy();

header("location:index.php?q=Sesión cerrada con exito.");
exit();