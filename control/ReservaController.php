<?php

require_once 'Controller.php';
require_once 'view/libs/Ladybug/autoload.php';

/**
 * Description of ReservaController
 *
 * @author ocaraballero
 */
class ReservaController extends Controller{
    function process() {
        
        var_dump($_POST);
        die();
        
        $this->_view->render();
    }
}
