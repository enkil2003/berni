<?php /* ========================
STUDIOHIT => [Alejandro Pacheco],
Version = 1.0,
Ultima modificacion: 18/02/15
======================== */

include '../../interfaz/functions.php';

$id_video = $_POST['id_video'];

$sql = $mysqli->query("DELETE FROM videos WHERE id='{$id_video}'");

$mysqli->close();