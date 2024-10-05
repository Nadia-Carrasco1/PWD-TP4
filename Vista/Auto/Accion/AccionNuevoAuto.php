<?php
include_once '../../../configuracion.php';
$titulo="Nuevo auto";

$datosForm = data_submitted();

$objAbmAuto=new ABM_Auto();
$autoExiste= $objAbmAuto->buscar(['Patente'=>$datosForm['Patente']]);

$objAbmPersona=new ABM_Persona();
$personaExiste= $objAbmPersona->buscar(['NroDni'=>$datosForm['DniDuenio']]);
$icono = "<i class='bi bi-exclamation-triangle-fill'></i>";
$alert = "danger";

if($personaExiste!=null){ 
    if(count($autoExiste)==0){


        $respuesta= $objAbmAuto->alta($datosForm);
        if($respuesta){
            $respuesta="El auto fue ingresado a la base de datos correctamente";
            $icono = "<i class='bi bi-check-circle-fill'></i>";
            $alert = "success";
        }else{
            $respuesta="El auto no pudo ser ingresado a la base de datos";
        }
    }else{
        $respuesta="El auto ya se encuentra en la base de datos";
        
    }
}else{
    $respuesta="Debe registrarse antes de ingresar un nuevo auto"."<div class='d-flex justify-content-center'><a style='text-decoration: none; color: rgb(171,44,56); padding-left:2%; padding-right:2%; border:1px solid; border-radius:10px; background-color:#fff2f2;' href='../../Persona/NuevaPersona.php'>Registrarse</a></div>";
    
}

$link = "../";
$linkMenu = "../../";
include_once "../../Estructura/Header.php";

echo " <br> <div class='container d-flex justify-content-center'>
            <div class='d-flex justify-content-center'>
                <div class='alert alert-$alert'>
                    <div>
                        $icono
                        $respuesta
                    </div>
                </div> 
            </div>
        </div> 
        <div class='d-flex justify-content-center''>
        <a href='../NuevoAuto.php' class='btn btn-success col-md-1'>Volver</a>
        </div><br>";

include_once '../../Estructura/footer.php';
?>
 

