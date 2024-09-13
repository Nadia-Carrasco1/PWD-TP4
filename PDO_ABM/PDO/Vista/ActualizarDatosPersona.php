<?php 
include_once '../configuracion.php';
$titulo="Actualizar datos persona";

$datosForm = data_submitted();
//var_dump($datosForm);
$objAbmPersona = new ABM_Persona();
$objPersona = new Persona();

$persona = $objAbmPersona->buscar(['NroDni'=>$datosForm['NroDni']]); 
$persona = $persona[0];
//$persona = (array)$persona;

var_dump($persona);
var_dump($datosForm);

if ($objAbmPersona->modificacion($datosForm)) {
    echo "modificado";
} else {
    echo "no modificado";
}
?>