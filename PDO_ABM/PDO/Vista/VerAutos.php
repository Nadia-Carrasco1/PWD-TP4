<?php
include_once '../configuracion.php';
$titulo = "Buscar autos";

$objAuto = new ABM_Auto();
$param = "";
$arregloAutos = $objAuto->buscar($param);
?>


<table border="1">
    <tr>
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
    </tr>
    <tr>
        <?php
        foreach($arregloAutos as $unAuto) {
            echo "<tr>";
            echo "<td>" . $unAuto->getPatente() . "</td>";
            echo "<td>" . $unAuto->getMarca() . "</td>";
            echo "<td>" . $unAuto->getPatente() . "</td>";
            echo "</tr>";
        }
        ?>
    </tr>
</table>