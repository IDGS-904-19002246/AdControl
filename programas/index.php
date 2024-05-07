<?php

include 'model.php';

$model = new Model();
$data = $model->select();
$programs_types = $model->selectTypes();
// $pdocrud = new PDOCrud();
// $one = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // echo "<script>console.log('get correcto');</script>";
    if (!empty($_GET["id"])) {
        // $one = $model->getOne($_GET["id"]);
        echo 'ok , varios';
    }else{
        $data = $model->select();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    switch ($_POST["action"]) {
        case 'search':
            echo 'search';
            break;

        case 'update':
            echo 'update';
            break;

        case 'insert':
            $ok = $model->insert(
                $_POST["name"],
                $_POST["shortname"],
                $_POST["titlename"],
                $_POST["public"],
                $_POST["slogan"],
                $_POST["level"],
                $_POST["type"],
                $_POST["resume"]
            );
            echo $ok;

            
            break;
    
        default: break;
    }
    // $pnombre = $_POST["pnombre"];
    // $pnombrecorto = $_POST["pnombrecorto"];

    // $model->insertarDato($dato1,$dato2);
    // $datos = $model->getDatos();

    // if (!empty($_GET["search"])) {
    //     $datos = $model->selectByName($_POST["nombre"]);
    // }else{
    //     if (empty($_POST["pid"]) || $_POST["pid"] == 0) {
    //         echo 'NEW '.$pnombre;
    //     }else{
    //         echo 'UPDAT '.$pnombre;
    //     }
    // }

    
}



if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    if (!empty($_GET["id"])) {
        
        echo '<script>Swal.fire({ 
            icon: "success",
            title: "Buscando ...",
            showConfirmButton: false,
            timer: 1000
            });</script>';
        // $one = $model->getOne($_GET["id"]);
    }
}
function get(){
    return '$model->select()';
}

include 'view.php';
?>