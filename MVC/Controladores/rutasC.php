<?php


class RutasControlador{

    public function Plantilla(){

        include "Vistas/plantilla.php";
    }

    public function Rutas(){

        if(inset($_GET["ruta"])){

            $rutas = $_GET["ruta"];

        }else{

            $rutas = "index";

        }

        $respuesta = Modelo::RutasModelo($rutas);

        include $respuesta;

    }
    
}