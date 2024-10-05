<?php
include_once '../../../configuracion.php';
$titulo = "Cambio de dueño";

$datosForm = data_submitted(); 
$objAbmPersona = new ABM_Persona();
$objAbmAuto = new ABM_Auto();

$respuesta = $objAbmAuto->cambiarDuenio($datosForm['Patente'], $datosForm['NroDni']);

$link = "../";
$linkMenu = "../../";
include_once "../../Estructura/Header.php";
?>

<div>
    <?php
    $icono = "<i class='bi bi-exclamation-triangle-fill'></i>";
    $alert = "danger";
    switch ($respuesta) {
        case -1:
            $respuesta = "El cambio de dueño no pudo ser realizado";
            break;
        case 0:
            $respuesta = "El cambio de dueño se realizó con éxito";
            $icono = "<i class='bi bi-check-circle-fill'></i>";
            $alert = "success";
            break;
        case 1:
            $respuesta = "La persona ingresada ya es propietaria del auto";
            $alert = "warning";
            break;
        case 2; 
            $respuesta = "La persona ni el auto se encuentran en la base de datos";
            break;
        case 3:
            $respuesta = "La persona ingresada no se encuentra en la base de datos";
            break;
        case 4:
            $respuesta = "El auto ingresado no se encuentra en la base de datos";
    }
    echo "<br>
    <div class='container col-md-6'>
    <div class='d-flex justify-content-center'>
        <div class='alert alert-$alert'>
            <div>
            $icono
            $respuesta
            </div>
        </div>
    </div>
        <div class='d-flex justify-content-center''>
            <a href='../CambioDuenio.php' class='btn btn-success col-md-2'>Volver</a>
        </div>
    </div><br>
    ";
    ?>
</div>
<?php
include_once "../../Estructura/footer.php";
?>