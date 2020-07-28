<?php

class AdminC{

    public function IngresoC(){

        if(isset($_POST["usuario1"])){

            $datosC = array("usuario"=>$_POST["usuario1"], "clave"=>$_POST["clave1"]);

            $tablaBD = "administradores";

            $respuestas = AdminM::IngresoM($datosC, $tablaBD);
        }
    }
}