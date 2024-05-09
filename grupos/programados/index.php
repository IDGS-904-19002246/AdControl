<?php

include 'model.php';

$model = new Model();
$data = $model->select();
$programs = $model->selectPrograms();
$days = $model->selectDays();
$hours = $model->selectHours();
// $pdocrud = new PDOCrud();
// $one = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == 'search') {
        $data = $model->selectByName($_POST["nombre"]);
    }
    if ($_POST["action"] == 'insert') {
        $nombre_archivo = 'group_icon.png';
        $ruta_temporal = '../../assets/img/gfoto_grupo/';
        $n_pays = 0;
        $n_price = 0;
        if(isset($_FILES['image'])){
            $nombre_archivo = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/gfoto_grupo/'.$_FILES['image']['name']);
        }

        if (isset($_POST['pays'])) {
            $n_pays = $_POST['n_pays'];
            $n_price = $_POST['n_price'];
        }
        $ok = $model->insert(
            $_POST['program'],
            $_POST['city'],
            $_POST['n_sessions'],
            $_POST['capacity'],
            $nombre_archivo,
            ($_POST['pass'] ?? ''),
            $_POST['hoid'],
            $_POST['hohid'],
            
            (isset($_POST['intensive'])?1:0),
            (isset($_POST['special'])?1:0),
            (isset($_POST['certification'])?1:0),
            (isset($_POST['web'])?1:0),

            $_POST['date_start'],
            $_POST['date_end'],
            $_POST['date_start_advertising'],
            $_POST['date_end_advertising'],
            $_POST['date_start_2'],
            $_POST['date_end_2'],

            $_POST['price'],
            $_POST['price_card'],
            $_POST['price_spot'],
            $_POST['n_pays0'],
            $n_pays,
            $n_price
        );
        $data = $model->select();
    }
    if ($_POST["action"] == 'delete') {
        $ok = $model->delete($_POST["id"]);
        $data = $model->select();
    }
    if ($_POST["action"] == 'update_status') {
        $ok = $model->updateStatus($_POST["id"],$_POST["status"]);
        $data = $model->select();
    }
}




include 'view.php';
?>