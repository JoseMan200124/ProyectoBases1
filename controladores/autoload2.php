<?php

$base_dir = dirname(__FILE__);

// Incluir el archivo del modelo aquí (reemplaza 'model.php' con el nombre de tu archivo de modelo)
require_once $base_dir . '/../modelos/bases.php';
$model2 = new Model(); 
// Este es el query preestablecido que quieres ejecutar
$query2 = "declare @fechaInicio datetime
set @fechaInicio = '2023-01-01 00:00:00'
declare @fechaInicioRango datetime
set @fechaInicioRango = '2023-04-01 00:00:00'

select Tp.tipo, count(*) as Cantidad_partidas
from TipoPartida TP inner join Partida P on (TP.idTipoPartida = P.idTipoPartida2)
where (P.fechaHoraInicio > @fechaInicio and P.fechaHoraInicio <@fechaInicioRango)
group by Tp.tipo";

$result3 = $model2->execute_query($query2);

// Enviar los resultados de la consulta a la vista (reemplaza 'view.php' con el nombre de tu archivo de vista)
