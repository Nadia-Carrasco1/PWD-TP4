<?php 
include_once '../../configuracion.php';
$datos = data_submitted();

$resp=false;

$objTrans= new ABM_Auto();

$respuesta= $objTrans->buscar($datos);
if($respuesta!=null){
    $resp=true;
    

}

?>


<a href="../BuscarAuto.php">Volver</a>