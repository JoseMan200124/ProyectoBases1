<?php
require_once "modelos/bases.php"; 


require_once "modelos/ruta.php"; 
require_once "controladores/autoload.php"; 
require_once "controladores/autoload2.php"; 

require_once "controladores/bases.controlador.php"; 
$plantilla = new controladorBases(); 
$plantilla -> plantilla(); 