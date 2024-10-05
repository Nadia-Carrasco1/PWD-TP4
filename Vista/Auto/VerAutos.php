<?php
include_once '../../configuracion.php';
$link = "";
$linkMenu = "../";
$titulo = "Ver autos";
include_once '../Estructura/Header.php';

$objAbmAuto = new ABM_Auto();
$paramAutos = "";
$arregloAutos = $objAbmAuto->buscar($paramAutos);
$hayAutos = !empty($arregloAutos) ? true : false;
?>

<?php
if ($hayAutos) {
    echo 
    "
    <div class='container d-flex justify-content-center'>
        <div  class='col-md-6'><br>
            <div class='d-flex justify-content-center'>
                <h3>Todos los autos</h3>
            </div>
            <div class='d-flex justify-content-center'>
                <table border='1' class='table table-sm text-center table-bordered'>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Dueño</th>
                    </tr>
                    <tr>";
                foreach($arregloAutos as $unAuto) {
                    $duenio = $unAuto->getObjPersona();
                    echo "<tr class='table-active text-black'>";
                    echo    "<td class='bg-success'>" . $unAuto->getPatente() . "</td>";
                    echo    "<td class='table-success'>" . $unAuto->getMarca() . "</td>";
                    echo    "<td class='table-success'>" . $unAuto->getModelo() . "</td>";
                    echo    "<td>" . $duenio->getApellido() . " " . $duenio->getNombre(). "</td>";
                    echo "</tr>";
                }
                echo 
                    "</tr>
                </table>
            </div>
        </div>
    </div>";
} else {
    echo "<br>
    <div class='container col-md-6'>
        <div class='d-flex justify-content-center'>
            <div class='alert alert-success'>
                <div>
                No hay autos cargados en la base de datos
                </div>
            </div>
        </div>
    </div>
    ";
}
echo "<div class='d-flex justify-content-center''>
        <a href='NuevoAuto.php' class='btn btn-success col-md-2'>Ingresar un auto</a>
      </div><br>";

include_once '../Estructura/footer.php';
?>