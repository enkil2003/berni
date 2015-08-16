<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */

session_start();

// Conexión -> [mysql]
$mysqli = new mysqli('127.0.0.1', 'root', '', 'escuela');
if ($mysqli->connect_errno) {
    echo "Fallo la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; }

// Variables globales
$viewport = 'width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1';
$keywords = 'keywords';
$description = 'Description';
$robots = 'all';
$author = 'sillyhats.tv';
$lang = 'es';

// Funcion para obtener URL de la pagina actual
function dameURL(){
    $url="//".$_SERVER['HTTP_HOST'].'/2015/';
    return $url;
}


// Login token
$token = md5(rand(1000,9999));
$_SESSION['token'] = $token;


if($admin) {
    // Session para /admin/
    if(empty($_SESSION['colegio_username'])){
        header('Location: '.'../login/index.php?q=Inicia sesion para continuar'); }
}








