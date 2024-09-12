<?php
include_once '../../configuracion.php';
$titulo = "Lista autos";

$datosForm = data_submitted();
//var_dump($datosForm);
$objAbmPersona = new ABM_Persona();
$objAbmAuto = new ABM_Auto();

$duenio = $objAbmPersona->buscar(['NroDni'=>$datosForm['NroDni']]);
$duenio = $duenio[0];
$autosDuenio = $objAbmAuto->buscar(['DniDuenio'=>$datosForm['NroDni']]);
$tieneAutos = count($autosDuenio) > 0 ? true : false;
?>

<table border="1">
    <th colspan="6">Persona</th>
    <tr>
        <th>DNI</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Fecha de nacimiento</th>
        <th>Tel&eacute;fono</th>
        <th>Domicilio</th>
    </tr>
    <?php
    echo "<tr>";
    echo    "<td>".$duenio->getNroDni()."</td>";
    echo    "<td>".$duenio->getApellido()."</td>";
    echo    "<td>".$duenio->getNombre()."</td>";
    echo    "<td>".$duenio->getFechaNac()."</td>";
    echo    "<td>".$duenio->getTelefono()."</td>";
    echo    "<td>".$duenio->getDomicilio()."</td>";
    echo "</tr>";
    echo "</table>";
    if ($tieneAutos) {
        echo "<table border='1'>";
        if (count($autosDuenio) == 1) {
            echo "<th colspan='3'>Auto</th>";
        } else {
            echo "<th colspan='3'>Autos</th>";
        }
        
        echo    "<tr>";
        echo        "<th>Patente</th>";
        echo        "<th>Marca</th>";
        echo        "<th>Modelo</th>";
        echo    "</tr>";
        foreach ($autosDuenio as $unAuto) {
            echo "<tr>";
            echo    "<td>".$unAuto->getPatente()."</td>";
            echo    "<td>".$unAuto->getMarca()."</td>";
            echo    "<td>".$unAuto->getModelo()."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron autos a nombre de ".$duenio->getApellido()." ".$duenio->getNombre();
    }
    ?>