<?php

require_once 'db/medoo.min.php';


class LoginModel {
    
    public function comprobar ($email, $contrasena) {
        $bbdd = new medoo();
        $return = $bbdd->select("usuarios",[
            "nombre",
            "rol",
            "email"
        ],[
            "AND" => [
                "email" => $email,
                "contrasena" => $contrasena 
            ]
        ]);
        return $return;
        
//        $base="mda";
//        $tabla="usuarios";
//        $conexion=mysql_connect("localhost","mda","mda");
//        mysql_select_db ($base, $conexion);
// 
//        $resultado= mysql_query("SELECT nombre,rol FROM $tabla WHERE email = '$email' and contrasena='$contrasena'",$conexion);
//        return mysql_fetch_row($resultado);
 
 
    }
}