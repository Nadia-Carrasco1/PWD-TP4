<?php
include_once '../../../configuracion.php';
$link = "../";
$linkMenu = "../../";
$titulo = "Lista autos";
include_once '../../Estructura/Header.php';

$datosForm = data_submitted();
$objAbmPersona = new ABM_Persona();
$objAbmAuto = new ABM_Auto();

$duenio = $objAbmPersona->buscar(['NroDni'=>$datosForm['NroDni']]);

if (!empty($duenio)) {
    $duenio = $duenio[0];
    $autosDuenio = $objAbmAuto->buscar(['DniDuenio'=>$datosForm['NroDni']]);
    $tieneAutos = !empty($autosDuenio) ? true : false;

    if ($tieneAutos) {
        echo "
        <div class='container d-flex justify-content-center'>
            <div  class='col-md-11'><br>
                <div class='d-flex justify-content-center'>
                    <table border='1' class='table table-sm text-center table-bordered'>
                    <th colspan='6' >Persona</th>
                    <tr>
                        <th class='table-active text-black'>DNI</th>
                        <th class='table-active text-black'>Apellido</th>
                        <th class='table-active text-black'>Nombre</th>
                        <th class='table-active text-black'>Fecha de nacimiento</th>
                        <th class='table-active text-black'>Tel&eacute;fono</th>
                        <th class='table-active text-black'>Domicilio</th>
                    </tr>";
        echo        "<tr class='table-active text-black'>";
        echo           "<td class='bg-success'>".$duenio->getNroDni()."</td>";
        echo           "<td class='table-success'>".$duenio->getApellido()."</td>";
        echo           "<td class='table-success'>".$duenio->getNombre()."</td>";
        echo           "<td class='table-success'>".$duenio->getFechaNac()."</td>";
        echo           "<td class='table-success'>".$duenio->getTelefono()."</td>";
        echo           "<td>".$duenio->getDomicilio()."</td>";
        echo        "</tr>";
        echo        "</table>
                </div>
            </div>
        </div>";
    
        echo "
        <div class='container d-flex justify-content-center'>
            <div  class='col-md-11'><br>
                <div class='d-flex justify-content-center'>
                    <table border='1' class='table table-sm text-center table-bordered'>";
    
        if (count($autosDuenio) == 1) {
            echo "<th colspan='3' >Auto</th>";
        } else {
            echo "<th colspan='3' >Autos</th>";
        }
        
        echo "<tr>
                <th class='table-active text-black'>Patente</th>
                <th class='table-active text-black'>Marca</th>
                <th class='table-active text-black'>Modelo</th>
             </tr>";
        foreach ($autosDuenio as $unAuto) {
            echo "<tr class='table-active text-black'>";
            echo    "<td class='bg-success'>".$unAuto->getPatente()."</td>";
            echo    "<td class='table-success'>".$unAuto->getMarca()."</td>";
            echo    "<td>".$unAuto->getModelo()."</td>";
            echo "</tr>";
        }
        echo        "</table>
                </div>
            </div>
        </div>
        <div class='d-flex justify-content-center''>
            <a href='../listaPersonas.php' class='btn btn-success col-md-2'>Volver</a>
        </div><br>";
        } else {
        echo "<br>
              <div class='container col-md-6'>
                  <div class='d-flex justify-content-center'>
                      <div class='alert alert-success'>
                          <div>";
                          echo "No hay autos a nombre de ".$duenio->getApellido().' '.$duenio->getNombre();
        echo              "</div>
                      </div>
                  </div>
              </div>
              <div class='d-flex justify-content-center''>
                <a href='../NuevoAuto.php' class='btn btn-success col-md-2'>Ingresar auto</a>
              </div><br>";
    }
} else {
    echo "<br>
            <div class='container col-md-6'>
                <div class='d-flex justify-content-center'>
                    <div class='alert alert-success'>
                        <div>
                        La persona ingresada no se encuentra en la base de datos
                        </div>
                    </div>
                </div>
            </div>
            <div class='d-flex justify-content-center''>
              <a href='../NuevaPersona.php' class='btn btn-success col-md-2'>Ingresar persona</a>
            </div><br>";
}

include_once "../../Estructura/footer.php";
?>