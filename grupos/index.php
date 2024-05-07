<?php

include 'model.php';

$model = new Model();
$data = $model->select();
// $programs_types = $model->selectTypes();
// $pdocrud = new PDOCrud();
// $one = null;

// SELECT 
// 	g.gid,
// 	g.sedeclave,
// 	p.pnombre,
// 	g.gcapacidad,
// 	g.gfoto_grupo,
// 	g.gintensivo,
// 	g.gpromocion,
// 	g.gciudad,
	
	
// 	g.gsesiones,
// 	g.gsesionesimpartidas,
// 	g.ghrs_sesion,
	
// 	g.gf_inicio,
// 	g.gf_inicio_publicidad,
// 	g.gf_termino_publicidad,
// 	g.gf_inicio_venta,
// 	g.gf_inicio_cierre,
// 	g.gf_termino,
	
// 	g.gprecio,
// 	g.gpreciotarjeta,
// 	g.gpreciocontado,

// 	g.gpagoinicial,
// 	g.alumnospagados,
// 	g.gcuantospagos

// FROM grupos g
// INNER JOIN programas p ON g.pid = p.pid;

include 'view.php';
?>