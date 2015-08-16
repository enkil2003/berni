<?php /* ========================
STUDIOHIT => [Alejandro Pacheco],
Version = 1.0,
Ultima modificacion: 18/02/15
======================== */

include '../../interfaz/functions.php';

$school = $_POST['school'];
$id_video = $_POST['id_video'];

$sql = $mysqli->query("INSERT INTO videos (id_video, escuela) VALUES ('{$id_video}', '{$school}')");

$mysqli->close();