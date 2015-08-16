<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */
include '../../interfaz/functions.php';

$id_album = $_POST['id_album'];
$title = $_POST['title'];
$descripcion = $_POST['descripcion'];

$resultado = $mysqli->query("SELECT * FROM albums WHERE id = {$id_album}");

while ($fila = $resultado->fetch_assoc()) {
    $escuela = $fila['escuela'];
    $total_fotos = $fila['total_fotos']+1; } 

if(isset($_FILES["file"]["type"])){
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    $image_name = $_FILES["file"]["name"];
    $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    //assign unique name to image
    $name = uniqid($escuela, true).'_'.time().'_'.md5(rand(1000,9999)).'.'.$ext;
    if ((($_FILES["file"]["type"] == "image/png") || 
         ($_FILES["file"]["type"] == "image/jpg") || 
         ($_FILES["file"]["type"] == "image/jpeg")) 
        && ($_FILES["file"]["size"] < 600000)//Approx. 600kb files can be uploaded.
        && in_array($file_extension, $validextensions)) {
        if ($_FILES["file"]["error"] > 0){
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } else {
            if (file_exists("../../".$escuela."/img/fotos/" . $name)) {
                echo 'invalid';
            } else{
                $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "../../".$escuela."/img/fotos/".$name; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

                $sql = $mysqli->query("UPDATE albums SET total_fotos = {$total_fotos} WHERE id = {$album_id}");
                $sql1 = $mysqli->query("INSERT INTO fotos (id_album, name, titulo, descripcion) VALUES ('{$id_album}', '{$name}', '{$title}', '{$descripcion}')");

                echo "successfully";
                
                $mysqli->close();
            }
        }
    } else {
        echo 'invalid';
    }
}


?>