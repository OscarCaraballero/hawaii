<?php

require_once 'db/medoo.min.php';

/**
 * Description of DisponibilidadModel
 *
 * @author ocaraballero
 */

class DatosContactoModel extends medoo{
              
    var $bbdd;
    
    public function __construct($options = null) {
        $this->bbdd = new medoo();
    }
    
    public function getDatosContacto($id){
        return $this->bbdd->select("datoscontacto", "*",[
            "idDatosContacto" => $id
        ]);
    }

}