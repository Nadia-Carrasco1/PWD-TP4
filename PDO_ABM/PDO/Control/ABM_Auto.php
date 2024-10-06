<?php 

class ABM_Auto{


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return AMB_Auto
     */
    
    private function cargarObjeto($param){
        $obj = null;

        if(array_key_exists('Patente',$param) && array_key_exists('Marca',$param) && array_key_exists('Modelo',$param) && array_key_exists('DniDuenio',$param)){
            $obj = new Auto();

            $objPersona=new Persona();
            $objPersona->setNroDni($param['DniDuenio']);
            $objPersona->cargar();

            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $objPersona);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return ABM_Auto
     */

    private function cargarObjetoConClave($param){
        $obj = null;
        if( isset($param['Patente'])){
            $obj=new ABM_Auto();
            $obj->setear($param['Patente'],null,null,null);
        }
        return $obj;
    }
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }

    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
       // $param['Patente'] =null;
        $elObjAuto = $this->cargarObjeto($param);
        //verEstructura($elObjtTabla);
        if ($elObjAuto!=null && $elObjAuto->insertar()){
            $resp = true;
        }
        return $resp;
        
    }

     /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjAuto = $this->cargarObjetoConClave($param);
            if ($elObjAuto!=null && $elObjAuto->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjAuto = $this->cargarObjeto($param);
            if($elObjAuto!=null && $elObjAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }

    public function cambiarDuenio($patente, $nroDni) {
        $resp = -1;
        $persona = new ABM_Persona();
        $persona = $persona->buscar(['NroDni'=>$nroDni]);
        $auto = $this->buscar(['Patente'=>$patente]);

        if (!empty($persona && !empty($auto))) {
            $persona = $persona[0];
            $auto = $auto[0];
            $dniDiferente = $persona->getNroDni() != $auto->getObjPersona()->getNroDni() ? true : false;
            if ($dniDiferente) {
                $auto->setObjPersona($persona);
                if ($auto->modificar()) {
                    $resp = 0;
                }
            } else {
                $resp = 1;
            }
        } elseif (empty($persona) && empty($auto)) {
            $resp = 2;
        } elseif (empty($persona)) {
            $resp = 3;
        } else {
            $resp = 4;
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";
        if ($param!=NULL){
            if(isset($param['Patente'])){
                $where.=" and Patente ='".$param['Patente']."'";
            }    
            if(isset($param['Marca'])){
                $where.=" and Marca ='".$param['Marca']."'";
            }
            if(isset($param['Modelo'])){
                $where.=" and Modelo ='".$param['Modelo']."'";
            }
            if(isset($param['DniDuenio'])){
                $where.=" and DniDuenio ='".$param['DniDuenio']."'";
            }      
        }
        $auto = new Auto();
        $arreglo = $auto->listar($where);
        //$arreglo = Auto::listar($where);  
        return $arreglo;
    }
}
?>