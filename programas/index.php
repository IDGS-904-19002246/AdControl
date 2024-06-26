<?php

include 'model.php';

$model = new Model();
$data = $model->select();
$programs_types = $model->selectTypes();
$programs_certification = $model->selectCertification();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["action"] == 'search') {
        $data = $model->selectByName($_POST["nombre"]);
    }
    if ($_POST["action"] == 'insert') {
        $ok = $model->insert(
            $_POST["name"],
            $_POST["shortname"],
            $_POST["titlename"],

            $_POST["public"],
            $_POST["slogan"],
            $_POST["level"],

            $_POST["type"],
            $_POST["resume"],
            
            $_POST["requeriments"],
            $_POST["certification"],
        );
        $data = $model->select();
    }
    if ($_POST["action"] == 'update') {
        $ok = $model->update(
            $_POST["name"],
            $_POST["shortname"],
            $_POST["titlename"],
            $_POST["public"],
            $_POST["slogan"],
            ($_POST["level"] ?? ''),
            $_POST["type"],
            $_POST["resume"],
            
            $_POST["requeriments"],
            $_POST["certification"],
            $_POST["pid"]
        );
        $data = $model->select();
    }
    if ($_POST["action"] == 'delete') {
        $ok = $model->delete($_POST["pid"]);
        $data = $model->select();
    }

    
}



// if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
//     if (!empty($_GET["id"])) {
        
//         echo '<script>Swal.fire({ 
//             icon: "success",
//             title: "Buscando ...",
//             showConfirmButton: false,
//             timer: 1000
//             });</script>';
//         // $one = $model->getOne($_GET["id"]);
//     }
// }

include 'view.php';
?>