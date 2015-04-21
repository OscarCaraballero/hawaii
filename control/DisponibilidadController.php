<?php

require_once 'Controller.php';
/**
 * Description of Disponibilidad
 *
 * @author ocaraballero
 */
class DisponibilidadController extends Controller{
    function process() {
        var_dump($_POST);
        die();
        $this->_view->render([]);
    }
}
