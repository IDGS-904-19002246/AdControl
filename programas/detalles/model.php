<?php
include '../../includes/database.php';
// echo "Error al actualizar el dato: " . $mysqli->error;
class Model {
    public function insert($name,$desc,$fk_id){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $sql = "INSERT INTO programas_secciones
            (fk_id_programas, nombre, descripcion)
            VALUES (".$fk_id.",'".$name."','".$desc."')";

        if ($mysqli->query($sql) == 1) {
            $mysqli->close();
            return true;
        } else {
            $mysqli->close();
            return false;
        }        
    }
    public function update($name,$desc,$id){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}

        $sql = "UPDATE programas_secciones SET
                nombre ='".$name."',
                descripcion ='".$desc."'
            WHERE id = ".$id;

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

        $sql = "DELETE FROM programas_secciones WHERE id = ".$id;

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
    public function selectCertification() {
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }

        $sql = "SELECT
                pc.id,
                CONCAT(pc.marca, ' - ',pc.examen) 'name'
            FROM programas_certificaciones pc";

        $result = $mysqli->query($sql);

        $datos = array();
        while ($row = $result->fetch_assoc()) {$datos[] = $row;}
        $mysqli->close();
        return $datos;
    }
    public function selectById($id){
        $mysqli = conectarDB();
        if ($mysqli->connect_error) {die("Error de conexión: " . $mysqli->connect_error);}
        $sql = "SELECT
                p.pid,
                p.pnombre,
                p.presumen,
                p.pinversion,
                
                p.phoras,

                p.pnombrecorto,
                p.pnombrediploma,
                p.pdirigidoa,
                p.pslogan,
                p.pnivel,
                p.prequisitos,

                p.ptid,
                p.pcertificacion,
                (SELECT COUNT(*)FROM grupos g WHERE g.pid =  p.pid) n_grupo,
                (
                    SELECT JSON_ARRAYAGG(
                        JSON_OBJECT('id',ps.id,'name',ps.nombre,'desc',ps.descripcion)
                    )FROM programas_secciones ps WHERE ps.fk_id_programas = p.pid
                ) AS 'section'

        FROM programas p WHERE p.pid =".$id;

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