<?php 


function conectarDB() {
    $mysqli = new mysqli("localhost", "root", "", "adcontrol");

    // Verificar conexión
    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }

    return $mysqli;
}

// ADMINISTRACCION
// sControl Admon 
// Admon. Alumnos 
// Admon. de Grupos 
// Admon. Instructores 

//                 CURSOS Y TALLERES
// Certificados 
// Examenes y Testing 
// Direccion 
// Asistencias 
// Materiales Didacticos

//                 FINANZAS
// Vouchers y Codigos 
// Cobranza 
// Nominas
// Marketing 
// Reportes 
// Acceso Restringido  
?>