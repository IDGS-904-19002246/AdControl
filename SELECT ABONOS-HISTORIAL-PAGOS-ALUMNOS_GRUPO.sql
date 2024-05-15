-- GET USUARIOS/ASESORES POR GRUPO
SELECT
u.id,
concat(u.nombre,' ',u.apellidos) 'nombre',
u.correo,u.telefono,
u.foto

FROM tbl_usuarios u
INNER JOIN pv_grupo_usuario gu ON u.id = gu.fk_id_usuario 
WHERE u.fk_id_rol = 6 AND gu.fk_id_grupo = 5677;

-- GET HISTORIAL DE PAGOS de ALUMNO

SELECT
	p.id,
	pr.pnombre,p.costo,p.pago,p.metodo,p.fecha 'inscripcion',

	(
	SELECT JSON_ARRAYAGG(JSON_OBJECT('pago',a.pago,'fecha',a.pago)) FROM tbl_abonos a WHERE a.fk_id_pago = p.id
		
--		SELECT * FROM tbl_abonos a WHERE a.fk_id_pago = p.id
		) 'abonos'
FROM tbl_pagos p
INNER JOIN programas pr ON p.fk_id_programa = pr.pid
-- left JOIN tbl_abonos a ON p.id = a.fk_id_pago
WHERE p.fk_id_usuario = 1;

-- PAGO EN ABONOS

INSERT INTO tbl_abonos (fk_id_pago,fecha,pago)VALUES(2,'2023-10-01',500);
UPDATE tbl_pagos p SET
	pago = (SELECT SUM(pago) FROM tbl_abonos a WHERE a.fk_id_pago = 2)
	WHERE p.id = 2;
