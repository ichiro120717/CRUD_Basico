<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=crud","root","");

        return %bd;
    }

}

//Host: localhost
//nombre BD: crud
//usuario: root
//contraseña: