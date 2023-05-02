<?php

class Model {
    private $db;

    public function __construct() {
        $this->db = new PDO('sqlsrv:Server=Daniel;Database=Proyecto1', 'danman2021', '24dejunio');

        // Conectarse a la base de datos aquí (reemplaza los datos de conexión con los de tu base de datos)
    }

    public function execute_query($query) {
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}