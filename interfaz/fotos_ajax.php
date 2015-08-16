<?php /* ========================
sillyhats.tv
Version = 1.0,
Ultima modificacion: 12/02/15
======================== */
include 'functions.php';

showFotos($mysqli);

// Funcion para obtener las fotos de cada album
function showFotos($mysqli){

    $this_album = $_POST['this_album']; 

    $resultado = $mysqli->query("SELECT * FROM fotos WHERE id_album = {$this_album}");
    $cantidad = $resultado->num_rows;

    $data = array(
        'total' => $cantidad-1,
        'imgArreglo' => []
    );

    while ($fila = $resultado->fetch_assoc()) {
        $data['imgArreglo'][] = '<img src="img/fotos/'.$fila['name'].'" title="'.$fila['titulo'].'" data-descripcion="'.$fila['descripcion'].'" />'; } 

    $mysqli->close();

    // Devuelvo el json
    echo json_encode($data);

}