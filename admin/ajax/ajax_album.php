<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */
include '../../interfaz/functions.php';

$total = $_POST['total'];
$escuela = $_POST['escuela'];

if($total && $escuela){

    $resultado = $mysqli->query("INSERT INTO albums (total_fotos, escuela) VALUES ('{$total}', '{$escuela}')");

    $array = ['new_id_album'=>$mysqli->insert_id,'school'=>$escuela];

    echo json_encode($array);

    $mysqli->close();

}