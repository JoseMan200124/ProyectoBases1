<?php

$base_dir = dirname(__FILE__);

// Incluir el archivo del modelo aquí (reemplaza 'model.php' con el nombre de tu archivo de modelo)
require_once $base_dir . '/../modelos/bases.php';
$model2 = new Model(); 
// Este es el query preestablecido que quieres ejecutar
$query2 = "declare @TopCosmeticos int
set @TopCosmeticos = 10
select
	tbl6.Ranking,
	tbl6.Cosmetico,
	tbl6.Efectividad
from(
select ROW_NUMBER() over (order by (count(c.nombre)) desc) Ranking, C.nombre Cosmetico, count(CP.idDetalleCosmetico)/count(c.nombre) as Efectividad
from Cosmetico C inner join DetalleCosmetico DC on (C.idCosmetico = DC.idCosmetico) inner join CosmeticoPartida CP on (CP.idDetalleCosmetico = DC.idDetalleCosmetico)
group by C.nombre
)tbl6 Where (tbl6.Ranking <=@TopCosmeticos)";

$result4 = $model2->execute_query($query2);

// Enviar los resultados de la consulta a la vista (reemplaza 'view.php' con el nombre de tu archivo de vista)
