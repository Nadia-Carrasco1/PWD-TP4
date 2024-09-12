<?php
include_once '../configuracion.php';
$titulo = "Ver autos";

$objAbmAuto = new ABM_Auto();
$paramAutos = "";
$arregloAutos = $objAbmAuto->buscar($paramAutos);
$hayAutos = count($arregloAutos) > 0 ? true : false;
?>

<?php
if ($hayAutos) {
    echo 
    "<table border='1'>
        <tr>
            <th>Patente</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Dueño</th>
        </tr>
        <tr>";
    foreach($arregloAutos as $unAuto) {
        $duenio = $unAuto->getObjPersona();
        echo "<tr>";
        echo "<td>" . $unAuto->getPatente() . "</td>";
        echo "<td>" . $unAuto->getMarca() . "</td>";
        echo "<td>" . $unAuto->getModelo() . "</td>";
        echo "<td>" . $duenio->getApellido() . " " . $duenio->getNombre(). "</td>";
        echo "</tr>";
    }
    echo 
        "</tr>
    </table>";
} else {
    echo "<p>No hay autos cargados en la base de datos</p>";
}

?>