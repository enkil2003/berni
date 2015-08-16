<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */
include '../../interfaz/functions.php';

$id = $_POST['id'];

if($id){

    // sql to delete a record
    $sql = "DELETE FROM albums WHERE id='{$id}'";

    if ($mysqli->query($sql) === TRUE) { 
        $sql_fotos = "DELETE FROM fotos WHERE id_album='{$id}'";
        if($mysqli->query($sql_fotos) === TRUE) {
            echo 'successfully';
        }
    } 

    $mysqli->close();

}