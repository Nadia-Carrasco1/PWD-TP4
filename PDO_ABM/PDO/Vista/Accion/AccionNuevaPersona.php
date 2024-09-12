<?php
include_once '../../configuracion.php';
$titulo = "Nueva persona";

$datosForm = data_submitted();

$objAbmPersona = new ABM_Persona();
$personaExiste = $objAbmPersona->buscar(['NroDni'=>$datosForm['NroDni']]);

if (count($personaExiste) == 0) {
    $respuesta = $objAbmPersona->alta($datosForm);
    if ($respuesta) {
        $respuesta = "La persona fue ingresada a la base de datos correctamente";
    } else {
        $respuesta = "La persona no pudo se ingresada a la base de datos";
    }
} else {
    $respuesta = "La persona ya se encuentra en la base de datos";
}
?>

<div>
    <?php
    echo $respuesta;
    ?>
</div>