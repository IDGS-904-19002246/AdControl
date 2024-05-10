<?php
include 'model.php';
$model = new Model();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        // $data = $model->select();
        echo $_GET['id'];
    }else {
        header('Location:/../programas/');
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if ($_POST["action"] == 'search') {
//         $data = $model->selectByName($_POST["nombre"]);
//     }
//     if ($_POST["action"] == 'insert') {
//         $ok = $model->insert(
//             $_POST["name"],
//             $_POST["shortname"],
//             $_POST["titlename"],

//             $_POST["public"],
//             $_POST["slogan"],
//             $_POST["level"],

//             $_POST["type"],
//             $_POST["resume"],
//             $_POST["requeriments"]
//         );
//     }
//     if ($_POST["action"] == 'update') {
//         $ok = $model->update(
//             $_POST["name"],
//             $_POST["shortname"],
//             $_POST["titlename"],
//             $_POST["public"],
//             $_POST["slogan"],
//             ($_POST["level"] ?? ''),
//             $_POST["type"],
//             $_POST["resume"],
//             $_POST["requeriments"],
//             $_POST["pid"]
//         );
//     }
//     if ($_POST["action"] == 'delete') {
//         $ok = $model->delete($_POST["pid"]);
//         $data = $model->select();
//     }

    
// }



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