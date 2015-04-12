<?php

class LoginModel {
    
    public function comprobar ($email, $contrasena) {
        $base="mda";
        $tabla="usuarios";
        $conexion=mysql_connect("localhost","mda","mda");
        mysql_select_db ($base, $conexion);
 
        $resultado= mysql_query("SELECT nombre,rol FROM $tabla WHERE email = '$email' and contrasena='$contrasena'",$conexion);
        return mysql_fetch_row($resultado);
 
 
    }
}