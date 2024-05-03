<?php

include '../../includes/database.php';

class Model {
    public function select() {
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }

        // $sql = "SELECT * FROM programas limit 10";
        $sql = "SELECT 
                p.pid,
                p.pnombre,
                p.presumen,
                p.pinversion,
                pt.ptdescripcion,
                p.phoras
                
            FROM programas p
            INNER JOIN programas_tipos pt ON pt.ptid = p.ptid
            limit 7";

        $result = $mysqli->query($sql);

        $datos = array();
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        $mysqli->close();
        return $datos;
    }

    public function insert($dato1, $dato2) {
        $mysqli = conectarDB(); // Obtener conexión a la base de datos desde el archivo database.php
        
        // Escapar los datos para evitar inyección SQL
        $dato1 = $mysqli->real_escape_string($dato1);
        $dato2 = $mysqli->real_escape_string($dato2);
        
        // Consulta SQL para insertar el dato
        $sql = "INSERT INTO tabla (`Columna 1`, `Columna 2`) VALUES ('$dato1', '$dato2')";
        
        // Ejecutar la consulta
        if ($mysqli->query($sql) == 1) {
            echo "Dato insertado correctamente.";
        } else {
            echo "Error al insertar el dato: " . $mysqli->error;
        }
        
        // Cerrar la conexión
        $mysqli->close();
    }

}
?>