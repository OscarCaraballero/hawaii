<?php

require_once 'db/medoo.min.php';

class ReservaModel extends medoo {

    var $bbdd;

    public function __construct($options = null) {
        $this->bbdd = new medoo();
    }

    public function insertaReserva($usuario,$entrada,$salida,$adultos,$ninos,$apartamento) {
        $id = $this->bbdd->insert("reserva", [
            "usuario" => $usuario,
            "entrada" => $entrada,
            "salida" => $salida,
            "adultos" => $adultos,
            "ninos" => $ninos,
            "apartamento" => $apartamento
        ]);
        return $id;
    }

    public function generatePassword() {
        $elementos = [
            "0",
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "a",
            "b",
            "c",
            "d",
            "e",
            "f",
            "g",
            "h",
            "i",
            "j",
            "k",
            "l",
            "m",
            "n",
            "o",
            "p",
            "q",
            "r",
            "s",
            "t",
            "u",
            "v",
            "w",
            "x",
            "y",
            "z",
        ];
        
        $pass = "";
        for ($i=0;$i<8;$i++){
            $indice = rand(0,35);
            $pass .= $elementos[$indice];
        }
        return $pass;
    }

    public function createUser($email,$pass,$rol,$datosContacto){
        $id = $this->bbdd->insert("usuarios", [
            "email" => $email,
            "password" => $pass,
            "rol" => '2',
            "datosContacto" => $datosContacto
        ]);
        return $id;
    }
    
    public function insertaDatosContacto($nombre,$apellidos,$documento,$pais,$telefono){
        $id = $this->bbdd->insert("datoscontacto", [
            "nombre" => $nombre,
            "apellidos" => $apellidos,
            "documento" => $documento,
            "pais" => $pais,
            "telefono" => $telefono
        ]);
        
        return $id;
    }

}
