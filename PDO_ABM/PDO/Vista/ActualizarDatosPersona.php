<?php 
include_once '../configuracion.php';
$titulo="Actualizar datos persona";

$datosForm = data_submitted();

$objAbmPersona = new ABM_Persona();
$persona = $objAbmPersona->buscar(['NroDni'=>$datosForm['NroDni']]); 
$persona = $persona[0];

$respuesta = "No se ingresaron datos para actualizar";
if ($objAbmPersona->modificacion($datosForm)) {
    $respuesta = "Las datos fueron actualizados correctamente";
} 
?>

<div>
    <?php
    echo $respuesta;
    ?>
</div>