<?php
require_once 'Controller.php';
require_once 'model/LoginModel.php';

class LoginController extends Controller {
    
    function process() {
        $email=$_POST['email'];
        $contrasena=$_POST['contrasena'];
        $contrasena = md5($contrasena);
        
        $comprobarModel= new LoginModel();
        $registro=$comprobarModel->comprobar($email, $contrasena);
        //Si no se encuentra en la base de datos regresamos al inicio
        

        if(empty($registro[0])){
            $_SESSION['msg'] = "Nombre de usuario o contraseña erroneos";
            header("Location:Inicio");
        }
        else {   
            /// Si llegamos hasta este punto es que si que existe el usuario por lo que procedemos a 
            // guardar los datos de sesion a falta de saber el tipo de usuario que es.
            $_SESSION["nombre"]= $registro[0]['nombre'];
            $_SESSION['user'] = $registro[0]['email'];
            $_SESSION["rol"]=$registro[0]['rol'];
            $_SESSION["datosContacto"]=$registro[0]['datosContacto'];
     
            header("Location:Inicio");                  
        }
    }
}