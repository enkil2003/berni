<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */

include '../interfaz/functions.php';

if (isset($_POST['username']) and isset($_POST['password'])){
    if(isset($_POST['token']) == $_SESSION['token']){

        // Recibo los parametros
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Si no se encuentran vacios
        if($username and $password){

            // Convierto la contrasenia a md5
            $password = md5($password);

            // Creo la consulta
            $resultado = $mysqli->query("SELECT * FROM usuarios_login WHERE username = '$username' and password = '$password' LIMIT 1");

            // Almaceno los resultados
            $cantidad = $resultado->num_rows;

            // Si existe un resultado creo la session
            if ($cantidad == 1){
                $_SESSION['colegio_username'] = $username;
                header('Location: '.'../admin/');
            } else{
                $invalid_login = true; } 
        }
    }
}

// Session para /admin/
if($_SESSION['colegio_username']){
    header('Location: '.'../admin/'); }
