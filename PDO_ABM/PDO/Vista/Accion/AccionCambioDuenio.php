<?php
include_once '../../configuracion.php';
$titulo = "Cambio de dueño";

$datosForm = data_submitted(); 
$objAbmPersona = new ABM_Persona();
$objAbmAuto = new ABM_Auto();

$respuesta = $objAbmAuto->cambiarDuenio($datosForm['Patente'], $datosForm['NroDni']);
?>

<div>
    <?php
    switch ($respuesta) {
        case -1:
            echo "El cambio de dueño no pudo ser realizado";
            break;
        case 0:
            echo "El cambio de dueño se realizó con éxito";
            break;
        case 1:
            echo "La persona ingresada ya es propietaria del auto";
            break;
        case 2; 
            echo "La persona ni el auto se encuentran en la base de datos";
            break;
        case 3:
            echo "La persona ingresada no se encuentra en la base de datos";
            break;
        case 4:
            echo "El auto ingresado no se encuentra en la base de datos";
    }
    ?>
</div>