<?php
include '../includes/database.php';
require_once '../script/pdocrud.php';

class Model {

    public function select2() {
        $pdocrud = new PDOCrud(false, "pure", "pure");

        $pdocrud->joinTable("programas_tipos", "programas.ptid = programas_tipos.ptid", "INNER JOIN");
        $pdocrud->crudTableCol(array(
            'pid',
            'pnombre',
            'presumen',
            'pinversion',
            'phoras',
            'ptdescripcion'
        ));
        $pdocrud->where("pactivo", "1","=");
        $table = $pdocrud->dbTable("programas");
        return $table;
    }

    public function select() {
        $pdocrud = new PDOCrud(false, "pure", "pure");

        $pdocrud->joinTable("programas_tipos", "programas.ptid = programas_tipos.ptid", "INNER JOIN");
        $pdocrud->crudTableCol(array(
            'pid',
            'pnombre',
            'presumen',
            'pinversion',
            'phoras',
            'ptdescripcion'
        ));
        $pdocrud->where("pactivo", "1","=");
        $table = $pdocrud->dbTable("programas");
        return $table;
    }



}
?>