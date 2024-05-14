<?php

include '../../includes/database.php';

class Model {
    public function select() {
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}
        // $sql = "SELECT * FROM programas limit 10";
        $sql = "SELECT 
                g.gid,
                p.pid,
                g.gciudad,
                p.pnombre,
                g.gpassword,
                g.gcapacidad,
                g.gfoto_grupo,
                g.hoid,g.hohid,
                g.gintensivo,g.grupoespecial,g.gsweb,g.gcertificacion,
                
                g.alumnospagados,
                g.gsesiones,
                g.gsesionesimpartidas,
                g.ghrs_sesion,
                
                g.gf_inicio,
                g.gf_inicio_publicidad,
                g.gf_termino_publicidad,
                g.gf_inicio_venta,
                g.gf_inicio_cierre,
                g.gf_termino,
                
                g.gprecio,
                g.gpreciotarjeta,
                g.gpreciocontado,
                g.gpagoinicial,
                g.gcuantospagos,
                g.gmontopagos,
                g.gpromocion

            FROM grupos g
            INNER JOIN programas p ON g.pid = p.pid
            -- WHERE g.gf_inicio > CURDATE()
            WHERE g.gstatus = 2
            ORDER BY g.gf_inicio DesC
            LIMIT 64";

        $result = $mysqli->query($sql);

        $datos = array();
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        $mysqli->close();
        return $datos;
    }

    public function selectByName($name){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}
        $sql = "SELECT 
                g.gid,
                p.pid,
                g.gciudad,
                p.pnombre,
                g.gpassword,
                g.gcapacidad,
                g.gfoto_grupo,
                g.hoid,g.hohid,
                g.gintensivo,g.grupoespecial,g.gsweb,g.gcertificacion,
                
                g.alumnospagados,
                g.gsesiones,
                g.gsesionesimpartidas,
                g.ghrs_sesion,
                
                g.gf_inicio,
                g.gf_inicio_publicidad,
                g.gf_termino_publicidad,
                g.gf_inicio_venta,
                g.gf_inicio_cierre,
                g.gf_termino,
                
                g.gprecio,
                g.gpreciotarjeta,
                g.gpreciocontado,
                g.gpagoinicial,
                g.gcuantospagos,
                g.gmontopagos,
                g.gpromocion

                FROM grupos g
            INNER JOIN programas p ON g.pid = p.pid
            WHERE g.gstatus = 2 AND
            (p.pnombre LIKE '%".$name."%' OR p.pnombrecorto LIKE '%".$name."%' OR p.pnombrediploma LIKE '%".$name."%') OR
            g.gid = ".$name."

            ORDER BY g.gf_inicio DesC
            LIMIT 64";

        $result = $mysqli->query($sql);

        $datos = array();
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        $mysqli->close();
        return $datos;
    }

    // -----------------------------------------------------------------------------------
    public function selectPrograms() {
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $sql = "SELECT p.pid, p.pnombre FROM programas p WHERE p.pactivo = 1;";

        $result = $mysqli->query($sql);
        $datos = array();
        while ($row = $result->fetch_assoc()) {$datos[] = $row;}
        $mysqli->close();
        return $datos;
    }
    public function selectDays() {
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $sql = "SELECT d.hoid, d.hodesc FROM grupos_horarios_dias d WHERE d.hoactivo = 1";

        $result = $mysqli->query($sql);
        $datos = array();
        while ($row = $result->fetch_assoc()) {$datos[] = $row;}
        $mysqli->close();
        return $datos;
    }
    public function selectHours() {
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $sql = "SELECT h.hohid,h.hohdesc,h.hohoras FROM grupos_horarios_horas h WHERE h.hohactivo = 1";

        $result = $mysqli->query($sql);
        $datos = array();
        while ($row = $result->fetch_assoc()) {$datos[] = $row;}
        $mysqli->close();
        return $datos;
    }
    
    
}
?>