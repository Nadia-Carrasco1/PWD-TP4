<?php 
include_once '../configuracion.php';
$titulo="Actualizar datos persona";

$datosForm = data_submitted();
$objAbmPersona = new ABM_Persona();

$respuesta = "No se ingresaron datos para actualizar";
if ($objAbmPersona->modificacion($datosForm)) {
    $respuesta = "Las datos fueron actualizados correctamente";
} else {
    $respuesta = "dddddddddddddddddddddd";
}
?>

<div>
    <?php
    echo $respuesta;
    ?>
</div>