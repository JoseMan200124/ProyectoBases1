<?php

Class conexionBaseDeDatos{
    static public function conectar(){
        $user = "Daniel\Administrador";
        $pass = ""; 
        $dbh = new PDO("sqlsrv:Server=Daniel,1433;Database=Proyecto1", $user , $pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $dbh; 
    }
}