<?php

include 'model.php';

$model = new Model();
$datos = $model->select();
// $one = null;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $dato1 = $_POST["dato1"];
//     $dato2 = $_POST["dato2"];

//     $model->insertarDato($dato1,$dato2);
//     $datos = $model->getDatos();
// }

// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     // echo "<script>console.log('get correcto');</script>";
//     if ($_GET["id"]) {
//         $one = $model->getOne($_GET["id"]);
//     }
// }

include 'view.php';
?>
