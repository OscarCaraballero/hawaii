<?php

require_once 'Controller.php';
require_once 'db/medoo.min.php';
require_once 'view/libs/Ladybug/autoload.php';
require_once 'model/DisponibilidadModel.php';
/**
 * Description of Disponibilidad
 *
 * @author ocaraballero
 */
class DisponibilidadController extends Controller{
    
    function process() {
        
                
        $entrada = explode("/", $_POST['entrada']);
        $entrada = $entrada[2] . "-" . $entrada[1] . "-" . $entrada[0];
        $salida = explode("/", $_POST['salida']);
        $salida = $salida[2] . "-" . $salida[1] . "-" . $salida[0];
        $adultos = $_POST['adultos'];
        $ninos = $_POST['ninos'];
        
        $dis = new DisponibilidadModel();
        
        $disponibles = $dis->apartamentosDisponibles($entrada, $salida);
        
        foreach ($disponibles as $apartment){
            ld($apartment);
        }
            
        
        die();
        $this->_view->render([]);
    }
}