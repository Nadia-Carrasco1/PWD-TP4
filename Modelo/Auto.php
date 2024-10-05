<?php

include_once 'conector/BaseDatos.php';

class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona; //Dueño
    private $mensajeOperacion;

    public function __construct(){
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->objPersona="";
        $this->mensajeOperacion="";
    }

    public function setear($patente, $marca, $modelo, $objPersona){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjPersona($objPersona);
    }

    
    public function getPatente(){
        return $this->patente;
    }

    public function setPatente($patente){
        $this->patente=$patente;
    }

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca=$marca;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function getObjPersona(){
        return $this->objPersona;
    }
    public function setObjPersona($objPersona){
        $this->objPersona=$objPersona;
    }

    public function getMensajeOperacion(){
        return $this->mensajeOperacion;
    }
    public function setMensajeOperacion($mensajeOperacion){
        $this->mensajeOperacion=$mensajeOperacion;
    }

    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente = ".$this->getPatente();
        if ($base->Iniciar()){
            $res = $base->Ejecutar($sql);
            if($rest>-1){
                if($rest>0){
                    $row=$base->Registro();
                    $objDuenio = new Persona();///////////////////////////////
                    $objDuenio->setNroDni($row['DniDuenio']);
                    $objDuenio->cargar();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $objDuenio);/////////////////////////////
                    $resp=true;
                }
            }
        } else{
            $this->setMensajeOperacion("auto->listar: ".$base->getError());
        }
        return $resp;
    } 

    public function insertar(){
        $resp=false;
        $base= new BaseDatos();
        $sql="INSERT INTO auto (Patente, Marca, Modelo, DniDuenio)
        VALUES ('".$this->getPatente()."', '".$this->getMarca()."', '".$this->getModelo()."', '".$this->getObjPersona()->getNroDni()."')";
        if ($base->Iniciar()){
            if($elid = $base->Ejecutar($sql)){
                $this->setPatente($elid);
                $resp=true;
            }else{
                $this->setMensajeOperacion("auto->insertar: ".$base->getError());
            }
            return $resp;
        }
    }

    public function modificar(){
        $resp=false;
        $base=new BaseDatos();
        $sql="UPDATE auto SET Marca='".$this->getMarca()."', Modelo='".$this->getModelo()."', DniDuenio='".$this->getObjPersona()->getNroDni()."' WHERE Patente='".$this->getPatente()."'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $resp=true;
            }else{
                $this->setMensajeOperacion("auto->modificar: ".$base->getError());
            } 
        }else{
            $this->setMensajeOperacion("auto->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp=false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente =".$this->getPatente();
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $resp=true;
            }else{
                $this->setMensajeOperacion("auto->eliminar: ".$base->getError());
            } 
        }else{
            $this->setMensajeOperacion("auto->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public function listar($parametro=""){
        $arreglo=array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto";
        if($parametro!=""){
            $sql.=' WHERE '.$parametro;
        }
        $res=$base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while($row=$base->Registro()){
                    $obj=new Auto();
                    $objDuenio = new Persona();/////////////////////////
                    $objDuenio->setNroDni($row['DniDuenio']);
                    $objDuenio->cargar();
                    $obj->setear($row['Patente'],$row['Marca'],$row['Modelo'],$objDuenio);//////////////////////////
                    array_push($arreglo,$obj);
                }
            }
        }else{
            $this->setMensajeOperacion("auto->listar: ".$base->getError());
        }
        return $arreglo;
    }
    
}
?>