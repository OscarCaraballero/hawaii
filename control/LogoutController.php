<?php

require_once 'Controller.php';

class LogoutController extends Controller {
    
    function process() {
        session_destroy();
        if ($_SERVER["SERVER_NAME"] === "localhost") header("Location: hawaii");
            else header("Location: hawaii");
    }
}