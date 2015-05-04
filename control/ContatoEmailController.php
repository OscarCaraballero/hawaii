<?php

require_once 'Controller.php';
require_once 'model/MeilerModel.php';
/**
 * Description of ContatoEmailController
 *
 * @author ocaraballero
 */
class ContatoEmailController extends Controller{
    function process() {
        
        $mailer = new MeilerModel();
        
        $body = "<p>Nombre: {$_POST['nombre']}</p>"
        . "<p>Email: {$_POST['email']}</p>"
        . "<p>Tipo de duda: {$_POST['obejeto']}</p>"
        . "<p>Mensaje: {$_POST['mensaje']}</p>";
        
        
        $pepe = $mailer->sendMail("hawaiiapartamentos@gmail.com", "noreply@hawaiiapartamentos.com", $body, "Consulta Cliente");
        
        header("Location:Inicio");
        
    }
}
