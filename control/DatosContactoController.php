<?php

require_once 'Controller.php';
require_once 'view/libs/Ladybug/autoload.php';
require_once 'model/DatosContactoModel.php';

/**
 * Description of DatosContactoController
 *
 * @author ocaraballero
 */
class DatosContactoController extends Controller{
    function process() {
        if (array_key_exists("user", $_SESSION))
        {
            $datos = Array();
            $DCM = new DatosContactoModel();
            $datosCont = $DCM->getDatosContacto($_SESSION['datosContacto']);
            
            array_push($datos, $_POST);
            array_push($datos, $datosCont);
            array_push($datos, $_SESSION);
            $this->_view->render($datos);
        }else
        {
            $this->_view->render($_POST);
        }
        
    }
}
