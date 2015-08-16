<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */
include '../../interfaz/functions.php';

$id_photo = $_POST['id_photo'];
$album_id = $_POST['album_id'];

if($id_photo && $album_id){

    $respuesta = [
        'delete_album' => NULL,
        'delete_photo' => NULL
    ];

    $consulta = $mysqli->query("SELECT * FROM albums WHERE id = {$album_id}");
    while ($fila = $consulta->fetch_assoc()) {
        $resta = $fila['total_fotos']-1;

        if($resta<=0){

            $sqly = "DELETE FROM albums WHERE id ='{$album_id}'";

            if ($mysqli->query($sqly) === TRUE) { 
                $respuesta['delete_album'] = true; } 

        } else {

            $sql = $mysqli->query("UPDATE albums SET total_fotos = {$resta} WHERE id={$album_id}");

        }
    }

    // sql to delete a record
    $sql = "DELETE FROM fotos WHERE ID='{$id_photo}'";

    if ($mysqli->query($sql) === TRUE) { 
        $respuesta['delete_photo'] = true;
    } 

    echo json_encode($respuesta);

    $mysqli->close();

}