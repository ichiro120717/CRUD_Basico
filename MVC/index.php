<?php

require_once "Controladores/rutasC.php"; //(Esto se usa principalmente para enlazar los archivos)
require_once "Modelos/rutasM.php";

$rutas = new RutasControlador();
$rutas -> Plantilla();