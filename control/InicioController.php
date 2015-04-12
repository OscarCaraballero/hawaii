<?php
require_once 'Controller.php';
require_once 'db/medoo.min.php';

class InicioController extends Controller {
    function process() {
        $this->_view->render();
    }
}
