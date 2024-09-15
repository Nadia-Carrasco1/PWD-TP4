<?php
include_once '../../configuracion.php';
$titulo="Buscar Auto";
include_once ( '../Estructura/Header.php');
$datosForm = data_submitted();
$patente = $datosForm['Patente'];
$objAbmAuto = new ABM_Auto();
$datosAuto = $objAbmAuto->buscar(['Patente' => $patente]);

if (!empty($datosAuto)) {
    $auto = $datosAuto[0];
    
    if (isset($datosForm['Marca']) && isset($datosForm['Modelo'])) {
        // Verificar si la marca y el modelo coinciden
        if ($auto->getMarca() == $datosForm['Marca'] && $auto->getModelo() == $datosForm['Modelo']) {
            echo "<h2>Datos del Auto</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                    </tr>
                    <tr>
                        <td>{$auto->getPatente()}</td>
                        <td>{$auto->getMarca()}</td>
                        <td>{$auto->getModelo()}</td>
                        
                    </tr>
                  </table>";
        } else {
            echo "La marca o el modelo no coinciden con los datos del auto.";
        }
    } else {
        // Mostrar formulario para ingresar marca y modelo
        echo "
        <div class='container'>
            <h3>Ingrese la Marca y el Modelo del Auto</h3>
            <div>
            <form method='POST' action='' id='formAccionBuscarAuto'>
                <input type='hidden' name='Patente' value='{$patente}'>
                <label for='Marca'>Marca:</label>
                <input type='text' id='Marca' name='Marca' required>
                <label for='Modelo'>Modelo:</label>
                <input type='number' id='Modelo' name='Modelo' required>
                <input type='submit' value='Verificar'>
              </form>
            <div/>
        </div>";
    }
} else {
    echo "No se encontró ningún auto con la patente ingresada.";
}
echo "<br><a href='../BuscarAuto.php'>Volver</a>";

include_once '../Estructura/footer.php';
$src= "../Estructura/JS/buscarAuto.js";
echo "<script src='$src'></script>";

?>


