<?php

use medoo;

require_once 'db/medoo.min.php';

/**
 * Description of DisponibilidadModel
 *
 * @author ocaraballero
 */

class DisponibilidadModel extends medoo{
              
    var $bbdd = new medoo();
    
    
    function apartamentosDisponibles($entrada,$salida){
        $bbdd = new medoo();
        return $bbdd->query("select tabla.idApartamento,tabla.tipo from
            (select * from hawaii.apartamento where idApartamento not in (SELECT 
            apartamento FROM hawaii.reserva where entrada <= '{$entrada}' and 
            salida >= '{$entrada}' union all select apartamento from 
            hawaii.reserva where entrada <= '{$salida}' and 
            salida >= '{$salida}')) as tabla group by tipo")->fetchAll();
    }
    
    function precio($id){
        return global $bbdd->qu
    }
}
