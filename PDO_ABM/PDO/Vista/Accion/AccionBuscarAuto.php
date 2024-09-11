<?php 
include_once '../../configuracion.php';

$datos = data_submitted();
$objTrans= new ABM_Auto();

$arregloAutos=$objTrans->buscar($datos['Patente']);
$autoEncontrado=null;
foreach ($arregloAutos as $auto) {
    if ($auto->getPatente() === $datos['Patente']) {
        $autoEncontrado = $auto;
        break;
    }
}
if ($autoEncontrado !== null) {
    echo "Auto encontrado ";
    
} else {
    echo "No se encontró un auto con la patente " . $datos['Patente'];
}

?>
 
 <table border="1">
    <tr>
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
    </tr>
    <tr>
    <?php
        if($autoEncontrado!==null) {
         


            echo "<tr>";
            echo "<td>" . $autoEncontrado->getPatente() . "</td>";
            echo "<td>" . $autoEncontrado->getMarca() . "</td>";
            echo "<td>" . $autoEncontrado->getModelo() . "</td>";
            echo "</tr>";
        }
        ?>
    </tr>
</table>



<a href="../BuscarAuto.php">Volver</a> 