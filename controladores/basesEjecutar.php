<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = $_POST['query'];

    // Incluir el archivo del modelo aquí (reemplaza 'model.php' con el nombre de tu archivo de modelo)
    require_once '../modelos/bases.php';

    // Crear una instancia del modelo y ejecutar la consulta
    $model = new Model();
    $result = $model->execute_query($query);
    require_once "../modelos/ruta.php"; 
    require_once "../controladores/autoload.php"; 
    require_once "../controladores/autoload2.php"; 
    require_once "../controladores/autoload3.php"; 

    // Enviar los resultados de la consulta a la vista (reemplaza 'view.php' con el nombre de tu archivo de vista)
    require_once '../vistas/plantilla.php';
}