<?php

//require_once 'model/DatabaseManager.php';
require_once 'Controller.php';

class InitController extends Controller {

    function process() {
        header("Location: Inicio");
    }
}
