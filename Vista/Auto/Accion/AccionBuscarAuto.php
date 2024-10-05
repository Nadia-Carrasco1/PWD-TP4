<?php
include_once '../../../configuracion.php';
$titulo="Buscar Auto";
$link = "../";
$linkMenu = "../../";
include_once "../../Estructura/Header.php";

$datosForm = data_submitted();
$patente = $datosForm['Patente'];
$objAbmAuto = new ABM_Auto();
$datosAuto = $objAbmAuto->buscar(['Patente' => $patente]);

$icono = "<i class='bi bi-exclamation-triangle-fill'></i>";
$alert = "danger";
if (!empty($datosAuto)) {
    $auto = $datosAuto[0];
    
    if (isset($datosForm['Marca']) && isset($datosForm['Modelo'])) {
        // Verificar si la marca y el modelo coinciden
        if ($auto->getMarca() == $datosForm['Marca'] && $auto->getModelo() == $datosForm['Modelo']) {
            $respuesta= "
                            <div class='d-flex justify-content-center'>
                                <h3>Datos del Auto</h3>
                            </div>
                     
                            <div class='d-flex justify-content-center'>
                                <table border='1' class='table table-sm text-center table-bordered'>
                                    <tr >
                                        <th>Patente</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                    </tr>
                                    <tr class='table-active text-black'>
                                        <td class='bg-success '>{$auto->getPatente()}</td>
                                        <td class='table-success'>{$auto->getMarca()}</td>
                                        <td>{$auto->getModelo()}</td>
                                        
                                    </tr>
                                </table>
                            </div>";
                            $icono=null;
                            $alert=null;
        } else {
            $respuesta= "La marca o el modelo no coinciden con los datos del auto";
        }
    } else {
        // Mostrar formulario para ingresar marca y modelo
        $respuesta= "
     
                    <h4>Ingrese la Marca y el Modelo del Auto</h4>
              
                
                <div class='d-flex justify-content-center'>
                    <form method='POST' action='' id='formAccionBuscarAuto'  class='needs-validation' novalidate>
                        <input type='hidden' class='form-control' name='Patente' value='{$patente}'>
                        <label for='Marca' id='Marca' class='form-label text-muted'>Marca:</label>
                        <input type='text' class='form-control' id='Marca' name='Marca' required><br>
                        <label for='Modelo' id='Modelo' class='form-label text-muted'>Modelo:</label>
                        <input type='number' class='form-control' id='Modelo' name='Modelo' required><br>
                        <div class='d-flex justify-content-center'>
                             <input type='submit' value='Buscar' class='btn btn-success col-md-5'>
                        </div>
                    </form>
                </div>";
           
        $icono=null;
        $alert=null;

    }
} else {
    $respuesta= "No se encontró ningún auto con la patente ingresada";
}
$src= "../../Estructura/JS/buscarAuto.js";

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
</div>
<div class='d-flex justify-content-center''>
    <a href='../BuscarAuto.php' class='btn btn-success col-md-1'>Volver</a>
</div><br>";

include_once '../../Estructura/footer.php';

?>


