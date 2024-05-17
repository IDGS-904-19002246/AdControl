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
            WHERE g.gstatus = 0
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
            WHERE g.gstatus = 0 AND
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

    public function insert(
        // SECTION 1
        $pid,
        $gciudad,
        $gsesiones,
        $gcapacidad,
        $gfoto_grupo,
        $pass,
        $hoid,$hohid,
        $gintensivo,$grupoespecial,$gsweb,$gcertificacion,
        // SECTION 2
        $gf_inicio,$gf_termino,
        $gf_inicio_publicidad,$gf_termino_publicidad,
        $gf_inicio_venta,$gf_inicio_cierre,
        //  SECTION 3
        $gprecio,
        $gpreciotarjeta,$gpreciocontado,
        $gpagoinicial,$gcuantospagos,$gmontopagos
    ) {
        $mysqli = conectarDB();
        $sql = "INSERT INTO grupos(
            -- SECTION 1
            pid,
            gciudad,
            gsesiones,
            gcapacidad,
            gfoto_grupo,
            gpassword,

            ghrs_sesion,
            hoid,hohid,
            gintensivo,grupoespecial,gsweb,gcertificacion,
            -- SECTION 2
            gf_inicio,
            gf_termino,
            gf_inicio_publicidad,
            gf_termino_publicidad,
            gf_inicio_venta,
            gf_inicio_cierre,
            -- SECTION 3
            gprecio,
            gpreciotarjeta,gpreciocontado,
            gpagoinicial,gcuantospagos,gmontopagos,
            -- ---------------------------------
            auid,gstatus,gpromocion)VALUES(
                ".$pid.",
                '".$gciudad."',
                ".$gsesiones.",
                ".$gcapacidad.",
                '".$gfoto_grupo."',
                '".$pass."',
                (SELECT hohoras FROM grupos_horarios_horas WHERE hohid = ".$hohid."),
                ".$hoid.",
                ".$hohid.",
                ".$gintensivo.",".$grupoespecial.",".$gsweb.",".$gcertificacion.",
                
                '".$gf_inicio."',
                '".$gf_termino."',
                '".$gf_inicio_publicidad."',
                '".$gf_termino_publicidad."',
                '".$gf_inicio_venta."',
                '".$gf_inicio_cierre."',

                ".$gprecio.",
                ".$gpreciotarjeta.",
                ".$gpreciocontado.",
                ".$gpagoinicial.",
                ".$gcuantospagos.",
                ".$gmontopagos.",
                0,0,0
            )";

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return true;
        } else {
            $mysqli->close();
            return false;
        }    
    }
    public function update(
        // SECTION 1
        $pid,
        $gciudad,
        $gsesiones,
        $gcapacidad,
        // $gfoto_grupo,
        $pass,
        $hoid,$hohid,
        $gintensivo,$grupoespecial,$gsweb,$gcertificacion,
        // SECTION 2
        $gf_inicio,$gf_termino,
        $gf_inicio_publicidad,$gf_termino_publicidad,
        $gf_inicio_venta,$gf_inicio_cierre,
        //  SECTION 3
        $gprecio,
        $gpreciotarjeta,$gpreciocontado,
        $gpagoinicial,$gcuantospagos,$gmontopagos,
        $gid
    ){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $sql = "UPDATE grupos SET
                -- SECTION 1
                pid = ".$pid.",
                gciudad = '".$gciudad."',
                gsesiones = ".$gsesiones.",
                gcapacidad = ".$gcapacidad.",
                gpassword='".$pass."',
                ghrs_sesion=(SELECT hohoras FROM grupos_horarios_horas WHERE hohid = ".$hohid."),
                hoid=".$hoid.",hohid=".$hohid.",
                gintensivo=".$gintensivo.",grupoespecial=".$grupoespecial.",gsweb=".$gsweb.",gcertificacion=".$gcertificacion.",

                gf_inicio='".$gf_inicio."',
                gf_termino='".$gf_termino."',
                gf_inicio_publicidad='".$gf_inicio_publicidad."',
                gf_termino_publicidad='".$gf_termino_publicidad."',
                gf_inicio_venta='".$gf_inicio_venta."',
                gf_inicio_cierre='".$gf_inicio_cierre."',

                gprecio=".$gprecio.",
                gpreciotarjeta=".$gpreciotarjeta.",
                gpreciocontado=".$gpreciocontado.",
                gpagoinicial=".$gpagoinicial.",
                gcuantospagos=".$gcuantospagos.",
                gmontopagos=".$gmontopagos."

            WHERE gid = ".$gid;

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return true;
        } else {
            $mysqli->close();
            return false;
        }        
    }
    public function delete($id){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}
        $_id = $mysqli->real_escape_string($id);

        $sql = "UPDATE grupos SET gstatus = 3 WHERE gid = ".$_id;

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return 1;
        } else {
            $mysqli->close();
            return 0;
        }        
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
    public function updateStatus($id,$status){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}
        $_id = $mysqli->real_escape_string($id);

        $sql = "UPDATE grupos SET gstatus = ".$status." WHERE gid = ".$_id;

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return 1;
        } else {
            $mysqli->close();
            return 0;
        }        
    }
    public function updateImage($id,$img){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $sql = "UPDATE grupos SET gfoto_grupo = '".$img."' WHERE gid = ".$id;

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return 1;
        } else {
            $mysqli->close();
            return 0;
        }        
    }


       public function programar($grupo,$seccion){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $data_sql = "SELECT
            g.gf_inicio,
            JSON_ARRAY(ghd.d0,ghd.d1,ghd.d2,ghd.d3,ghd.d4,ghd.d5,ghd.d6) as dias,
            ghh.hohoras
            FROM grupos g
            INNER JOIN grupos_horarios_dias ghd ON g.hoid = ghd.hoid
            INNER JOIN grupos_horarios_horas ghh ON g.hohid = ghh.hohid 
            WHERE g.gid = ".$grupo;
        $data_result = $mysqli->query($data_sql);
        if ($data_result) {
            $primer_fila = $data_result->fetch_assoc();

            $start = $primer_fila[array_keys($primer_fila)[0]];
            $days = array_keys(json_decode($primer_fila[array_keys($primer_fila)[1]]),1);
            $hours = $primer_fila[array_keys($primer_fila)[2]];


            $sessions = "SELECT*FROM programas_secciones_sesiones pss WHERE pss.fk_id_seccion =".$seccion;
            $result = $mysqli->query($sessions);
            $data = array();
            while ($row = $result->fetch_assoc()) {$data[] = $row;}

            return $data[0]['horas_estimadas'];
            $hours = $_hours;

            for ($i=0; $i < $data->count();) { 

                if ($_hours >= $data[$i]['horas_estimadas']) {
                    $_hours - $data[$i]['horas_estimadas']
                    $i++;
                    INSERTA
                }ELSE{
                 $i;
                }
            }

        }else{
            return 'error';
        }
        
        // -------------------
        // $datos = array();
        // while ($row = $data_result->fetch_assoc()) {$datos[] = $row;}


        // return $datos;


        // $sql = "SELECT*FROM programas_secciones_sesiones pss WHERE pss.fk_id_seccion =".$id;

        // $result = $mysqli->query($sql);

        // $datos = array();
        // while ($row = $result->fetch_assoc()) {

        //     $datos[] = $row;
        // }       
    }
}
?>