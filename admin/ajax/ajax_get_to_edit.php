<?php /* ========================
Alejandro Pacheco => [sillyhats.tv],
Version = 1.0,
Ultima modificacion: 6/11/14
======================== */
include '../../interfaz/functions.php';

$id = $_POST['id'];

if($id){

    $arreglo = [];
    
    $resultado_escuela = $mysqli->query("SELECT * FROM albums WHERE id = {$id}");
    while ($fila_p = $resultado_escuela->fetch_assoc()) {
        if($fila_p['escuela']=='fabulinus'){ $url = dameURL().'fabulinus/img/fotos/'; }
        else if($fila_p['escuela']=='primaria'){ $url = dameURL().'primaria/img/fotos/'; }
        else if($fila_p['escuela']=='secundaria'){ $url = dameURL().'secundaria/img/fotos/'; }
        $arreglo[] = $url;
    }

    $resultado = $mysqli->query("SELECT * FROM fotos WHERE id_album = {$id}");

    while ($fila = $resultado->fetch_assoc()) {

        echo '<form data-id="'.$fila['ID'].'" class="uploadimage cfix disable_form" action="" method="post" enctype="multipart/form-data"><a class="delete_photo" href="#"><i class="fa fa-times"></i></a><input class="id_album" name="id_album" type="hidden"><div class="box-form"><label>Titulo</label><input name="title" type="text" value="'.$fila['titulo'].'" placeholder="'.$fila['titulo'].'" disabled></div><div class="box-form"><label>Descripcion</label><input name="descripcion" type="text" value="'.$fila['descripcion'].'" placeholder="'.$fila['descripcion'].'" disabled></div><div class="box-form"><label>Foto</label><div class="figure-content cfix"><div class="figure-box-form" style="background-color:#222;background-image:url('.$arreglo[0].$fila['name'].');"></div></div></div></form>';

    } 

    $mysqli->close();

}