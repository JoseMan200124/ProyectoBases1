<?php

$base_dir = dirname(__FILE__);

// Incluir el archivo del modelo aquí (reemplaza 'model.php' con el nombre de tu archivo de modelo)
require_once $base_dir . '/../modelos/bases.php';
$model2 = new Model(); 
// Este es el query preestablecido que quieres ejecutar
$query2 = "SELECT TOP 10 US.Nombre, SUM(DATEDIFF(MINUTE, P.fechaHoraInicio, P.fechaHoraFin)) AS TotalMinutosJugados FROM Usuario as US join UsuarioPartida as USP on USP.idUsuario = US.idUsuario join Partida AS P on P.idPartida = USP.idPartida GROUP BY US.Nombre ORDER BY TotalMinutosJugados DESC";

$result2 = $model2->execute_query($query2);

// Enviar los resultados de la consulta a la vista (reemplaza 'view.php' con el nombre de tu archivo de vista)
