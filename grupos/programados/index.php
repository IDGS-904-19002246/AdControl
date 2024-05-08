<?php

include 'model.php';

$model = new Model();
$data = $model->select();
$programs = $model->selectPrograms();
// $pdocrud = new PDOCrud();
// $one = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == 'search') {
        $data = $model->selectByName($_POST["nombre"]);
    }
}


include 'view.php';
?>