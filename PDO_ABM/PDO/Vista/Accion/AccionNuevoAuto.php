<?php
include_once '../../configuracion.php';
$titulo="Nuevo auto";

$datosForm = data_submitted();

$objAbmAuto=new ABM_Auto();
$autoExiste= $objAbmAuto->buscar(['Patente'=>$datosForm['Patente']]);

$objAbmPersona=new ABM_Persona();
$personaExiste= $objAbmPersona->buscar(['NroDni'=>$datosForm['DniDuenio']]);
//print_r($datosForm['DniDuenio']);

print_r($personaExiste);

if(count($autoExiste)==0 && count($personaExiste)>0){


    $respuesta= $objAbmAuto->alta($datosForm);
    if($respuesta){
        $respuesta="El auto fue ingresado a la base de datos correctamente";
    }else{
        $respuesta="El auto no pudo ser ingresado a la base de datos";
    }
}else{
    $respuesta="El auto ya se encuentra en la base de datos";
}

?>
<div>
    <?php echo $respuesta; ?>
</div>