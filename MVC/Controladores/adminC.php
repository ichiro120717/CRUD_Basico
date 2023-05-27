<?php

class AdminC{

    public function IngresoC(){

        if(isset($_POST[eric.cobos.311"])){

            $datosC = array("eric.cobos.311"=>$_POST["eric.cobos.311"], "clave"=>$_POST["claveI"]);

            $tablaBD = "administradores";

            $respuesta = AdminM::IngresoM($datosC, $tablaBD);

            if($respuesta["eric.cobos.311"] == $_POST["eric.cobos.311"] && $respuesta["clave"] == $_POST["claveI"]){

                session_start();

                $_SESSION["Ingreso"] = true;

                header("location:index.php?ruta=empleados");

            }else{

                echo "ERROR AL INGRESAR";

            }

        }

    }

}
