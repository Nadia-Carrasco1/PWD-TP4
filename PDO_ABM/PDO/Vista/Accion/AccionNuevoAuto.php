<?php
include_once '../../configuracion.php';
$titulo="Nuevo auto";

$datosForm = data_submitted();

$objAbmAuto=new ABM_Auto();
$autoExiste= $objAbmAuto->buscar(['Patente'=>$datosForm['Patente']]);

$objAbmPersona=new ABM_Persona();
$personaExiste= $objAbmPersona->buscar(['NroDni'=>$datosForm['DniDuenio']]);


if($personaExiste!=null){ 
    if(count($autoExiste)==0){


        $respuesta= $objAbmAuto->alta($datosForm);
        if($respuesta){
            $respuesta="El auto fue ingresado a la base de datos correctamente";
        }else{
            $respuesta="El auto no pudo ser ingresado a la base de datos";
        }
    }else{
        $respuesta="El auto ya se encuentra en la base de datos";
        
    }
}else{
    $respuesta="Debe registrarse antes de ingresar un nuevo auto <br>"."<a href='../NuevaPersona.php'>Registrarse</a><br>";
    
}

?>
<div>
    <?php echo $respuesta; ?><br>
    <a href="../NuevoAuto.php">Volver</a>
</div>