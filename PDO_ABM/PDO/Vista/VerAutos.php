<?php
include_once '../configuracion.php';
$titulo = "Buscar autos";

$objAuto = new ABM_Auto();
$objPersona = new ABM_Persona();
$paramAutos = "";
$arregloAutos = $objAuto->buscar($paramAutos);

?>


<table border="1">
    <tr>
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Dueño</th>
    </tr>
    <tr>
        <?php
        foreach($arregloAutos as $unAuto) {
            $duenio = $unAuto->getObjPersona();
            echo "<tr>";
            echo "<td>" . $unAuto->getPatente() . "</td>";
            echo "<td>" . $unAuto->getMarca() . "</td>";
            echo "<td>" . $unAuto->getModelo() . "</td>";
            echo "<td>" . $duenio->getNombre() . " " . $duenio->getApellido(). "</td>";
            echo "</tr>";
        }
        ?>
    </tr>
</table>