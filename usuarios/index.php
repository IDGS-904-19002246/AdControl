<?php

include 'model.php';
require_once '../script/pdocrud.php';

$model = new Model();
$pdocrud = new PDOCrud();



// $table = $pdocrud->dbTable("programas");

$table = $model->select();



// $pdocrud->joinTable("programas_tipos", "programas.ptid = programas_tipos.ptid", "INNER JOIN");
// $pdocrud->crudTableCol(array(
//     'pid',
//     'pnombre',
//     'presumen',
//     'pinversion',
//     'phoras',
//     'ptdescripcion'
// ));
// $pdocrud->where("pactivo", "1","=");
// $table = $pdocrud->dbTable("programas");




include 'view.php';
?>