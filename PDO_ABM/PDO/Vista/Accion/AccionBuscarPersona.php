<?php 
include_once '../../configuracion.php';
$titulo="Buscar persona";

$datosFrom = data_submitted();
$objAbmPersona = new ABM_Persona();
$persona = $objAbmPersona->buscar(['NroDni'=>$datosFrom['NroDni']]);
?>

<?php
if (!empty($persona)) {
    $persona = $persona[0];
    echo 
    "
    <div>
        <div>
            <form name='formAccionBuscarPersona' id='formAccionBuscarPersona' method='post' action='../ActualizarDatosPersona.php' enctype='multipart/form-data'>
                <label for='NroDni'>DNI</label>
                <input type='number' name='NroDni' id='NroDni' readonly required style='color: gray' value=".$persona->getNroDni()."><br>
                <label for='Apellido'>Apellido</label>
                <input type='text' name='Apellido' id='Apellido' required value=".$persona->getApellido()."><br>
                <label for='Nombre'>Nombre</label>
                <input type='text' name='Nombre' id='Nombre' required value=".$persona->getNombre()."><br> 
                <label for='fechaNac'>Fecha de nacimiento</label>
                <input type='date' name='fechaNac' id='fechaNac' required value=".$persona->getFechaNac()."><br>
                <label for='Telefono'>Telefono</label>
                <input type='text' name='Telefono' id='Telefono' required value=".$persona->getTelefono()."><br>
                <label for='Domicilio'>Domicilio</label>
                <input type='text' name='Domicilio' id='Domicilio' required value=".$persona->getDomicilio()."><br><br>
               
                <input type='submit' value='Aceptar'>
            </form>
        </div>
    </div>
    ";
} else {
    echo "La persona ingresada no se encuentra en la base de datos";
}
?>