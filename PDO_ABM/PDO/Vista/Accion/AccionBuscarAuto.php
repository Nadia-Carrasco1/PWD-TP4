<?php
include_once '../../configuracion.php';

$titulo="Buscar Auto";

$datosForm= data_submitted();

$objAbmAuto=new ABM_Auto();
$patente=$datosForm['Patente'];

$datosAuto=$objAbmAuto->buscar(['Patente' => $patente]);


$auto=$datosAuto[0];
    print_r($auto);

   
    echo "
    <form method='POST' action='' enctype='multipart/form-data' id='formDatoAuto'>
    <label>Ingrese la marca del auto: </label> <input type='text' id='Marca' class='Marca' name='Marca' required> <br>
    <label>Ingrese el modelo del auto: </label><input type='number' id='Modelo' class='Modelo' name='Modelo' required><br>
    <input type='submit' value='Buscar'>
    </form>
    "; 
    print_r($auto);



    
    



        
        
       echo "<table border='1'>
        <tr>
            <th>Patente</th>
            <th>Marca</th>
            <th>Modelo</th>
        </tr>";
            echo "<tr>";
            echo "<td>" . $auto->getPatente() . "</td>";
            echo "<td>" . $auto->getMarca() . "</td>";
            echo "<td>" . $auto->getModelo() . "</td>";
            echo "</tr>";
        echo "</table>";


?>

<a href="../BuscarAuto.php">Volver</a>
