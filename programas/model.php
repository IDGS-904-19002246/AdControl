<?php
include '../includes/database.php';
// echo "Error al actualizar el dato: " . $mysqli->error;
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
                p.phoras,

                p.pnombrecorto,
                p.pnombrediploma,
                p.pdirigidoa,
                p.pslogan,
                p.pnivel,
                p.prequisitos,
                p.ptid
                
            FROM programas p
            INNER JOIN programas_tipos pt ON pt.ptid = p.ptid
            where p.pactivo = 1
            limit 13";

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
                p.pid,
                p.pnombre,
                p.presumen,
                p.pinversion,
                pt.ptdescripcion,
                p.phoras,

                p.pnombrecorto,
                p.pnombrediploma,
                p.pdirigidoa,
                p.pslogan,
                p.pnivel,
                p.prequisitos,
                p.ptid
                
            FROM programas p
            INNER JOIN programas_tipos pt ON pt.ptid = p.ptid
            where p.pactivo = 1 AND
            (p.pnombre LIKE '%".$name."%' OR p.pnombrecorto LIKE '%".$name."%' OR p.pnombrediploma LIKE '%".$name."%')";

        $result = $mysqli->query($sql);

        $datos = array();
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        $mysqli->close();
        return $datos;
    }

    public function insert($name,$shortname,$titlename,$public,$slogan,$level,$type,$resume,$requeriments) {
        $mysqli = conectarDB();

        $_pnombre = $mysqli->real_escape_string($name);
        $_pnombrecorto = $mysqli->real_escape_string($shortname);
        $_pnombrediploma = $mysqli->real_escape_string($titlename);
        $_pdirigidoa = $mysqli->real_escape_string($public);
        $_pslogan = $mysqli->real_escape_string($slogan);
        $_pnivel = $mysqli->real_escape_string($level);
        $_ptipo = $mysqli->real_escape_string($type);
        $_presumen = $mysqli->real_escape_string($resume);
        $_prequisitos = $mysqli->real_escape_string($requeriments);
        


        $sql = "INSERT INTO programas (
            `pnombre`,
            `pnombrecorto`,
            `pnombrediploma`,
            `pdirigidoa`,
            `pslogan`,
            `pnivel`,
            `ptid`,
            `presumen`,
            `prequisitos`,

            `marca`,
            `tematicas`
            ) VALUES (

            '".$_pnombre."',
            '".$_pnombrecorto."',
            '".$_pnombrediploma."',
            '".$_pdirigidoa."',
            '".$_pslogan."',
            '".$_pnivel."',
            ".$_ptipo.",
            '".$_presumen."',
            '".$_prequisitos."',
            0,'-'
            )";

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return true;
        } else {
            $mysqli->close();
            return false;
        }    
    }


    public function update($name,$shortname,$titlename,$public,$slogan,$level,$type,$resume,$requeriments,$pid){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $_pnombre = $mysqli->real_escape_string($name);
        $_pnombrecorto = $mysqli->real_escape_string($shortname);
        $_pnombrediploma = $mysqli->real_escape_string($titlename);
        $_pdirigidoa = $mysqli->real_escape_string($public);
        $_pslogan = $mysqli->real_escape_string($slogan);
        $_pnivel = $mysqli->real_escape_string($level);
        $_ptipo = $mysqli->real_escape_string($type);
        $_presumen = $mysqli->real_escape_string($resume);
        $_prequisitos = $mysqli->real_escape_string($requeriments);
        $_pid = $mysqli->real_escape_string($pid);


        $sql = "UPDATE programas SET
                pnombre ='".$_pnombre."',
                pnombrecorto ='".$_pnombrecorto."',
                pnombrediploma ='".$_pnombrediploma."',
                pdirigidoa ='".$_pdirigidoa."',
                pslogan ='".$_pslogan."',
                pnivel ='".$_pnivel."',
                ptid =".$_ptipo.",
                presumen ='".$_presumen."',
                prequisitos ='".$_prequisitos."'

            WHERE pid = ".$_pid;

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return true;
        } else {
            $mysqli->close();
            return false;
        }        
    }

    public function delete($pid){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $_pid = $mysqli->real_escape_string($pid);

        // DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';
        $sql = "UPDATE programas SET pactivo = 0 WHERE pid = ".$_pid;

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return true;
        } else {
            $mysqli->close();
            return false;
        }
    }
    // -----------------------------------------------------------------------------------
    public function selectTypes() {
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }

        $sql = "SELECT *
            FROM  programas_tipos pt
            where pt.ptipoactivo = 1";

        $result = $mysqli->query($sql);

        $datos = array();
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        $mysqli->close();
        return $datos;
    }

    public function selectById($id){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}
        $sql = "SELECT * FROM programas p WHERE p.pid =".$id;

        $result = $mysqli->query($sql);

        $datos = array();
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        $mysqli->close();
        return $datos;
    }
}
?>