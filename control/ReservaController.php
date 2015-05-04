<?php

require_once 'Controller.php';
require_once 'view/libs/Ladybug/autoload.php';
require_once 'model/ReservaModel.php';
require_once 'model/MeilerModel.php';

/**
 * Description of ReservaController
 *
 * @author ocaraballero
 */
class ReservaController extends Controller{
    function process() {
        
        $mailer = new MeilerModel();
        $model = new ReservaModel();
        $pass = $model->generatePassword();
        $contraseña = $pass;
        $pass = md5($pass);
        
        $idDatosContacto = $model->insertaDatosContacto($_POST['Nombre'], $_POST['Apellidos'],
                $_POST['documento'], $_POST['Pais'], $_POST['Telefono']);
        
        $user = $model->createUser($_POST['email'], $pass, '0', $idDatosContacto);
        
        $idReserva = $model ->insertaReserva($user, $_POST['entrada'], $_POST['salida'], $_POST['adultos'], 
                $_POST['ninos'], $_POST['idApartamento']);
        
        
        $body = "<h2>{$_POST['Nombre']} ,su reserva para los Apartamentos Hawaii ha sido realizada</h2>"
                . "<p>Su número de reserva es: {$idReserva}</p>"
                . "<p>Puede consultar los datos de su reserva con los siguiente datos de acceso</p>"
                . "<p><b>Usuario: </b>{$_POST['email']}</p>"
                . "<p><b>Contraseña: </b>{$contraseña}</p>"
                . "<br><h4>Este Mensaje ha sido autogenerado, por favor no responda a el.</h4>";
        
        if($mailer->sendMail($_POST['email'], "hawaiiapartamentos@gmail.com", $body, "Reserva Apartamentos Hawaii")){
            $msg = array("Mensaje" => "Su reserva se ha realizado con exito, se le ha enviado un correo a su email");
            $this->_view->render($msg);
        }else{
            $msg = array("Mensaje" => "Su reserva se ha generado con exito, ha ocurrido un error al enviar la información"
                . " de reserva a su email, por favor pongase en contacto con nosototros");
            $this->_view->render($msg);
        }
    }
}
