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
        $personas = (Int)$adultos + (Int)$ninos;
        
        $diff = strtotime($salida) - strtotime($entrada);
        $dias = abs($diff/(60*60*24));
        
        
        $dis = new DisponibilidadModel();
        
        $disponibles = $dis->apartamentosDisponibles($entrada, $salida);
        
        $datos = [];
        
        if($disponibles)
        {
            foreach ($disponibles as $apartment)
            {
                $tipo = "tipo" . $apartment['tipo'];
                $precioNoche = $dis->precio($apartment['tipo']);
                

                $precioTotal = (Int)$precioNoche['0'] * (int)$dias * $personas;
                
                $insert = [
                    "precioTotal" => $precioTotal,
                    "precioNoche" => $precioNoche[0],
                    "idApartamento" => $apartment['idApartamento'],
                    "tipo" => $apartment['tipo'],
                    "dias" => $dias,
                    "personas" => $personas,
                    "entrada" => $entrada,
                    "salida" => $salida,
                    "adultos" => $adultos,
                    "ninos" => $ninos
                ];
                array_push($datos, $insert);
                
                
            }
        }

        $this->_view->render($datos);
    }
}