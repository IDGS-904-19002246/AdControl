SELECT ms.modulo, 

	JSON_ARRAYAGG(JSON_OBJECT(
		'id',ms.id,
		'submodulo',ms.nombre
	))AS 'submodulos'
	 
FROM tbl_modulos_sub ms
INNER JOIN pv_rol_modulo rm ON  ms.id = rm.fk_id_modulo
WHERE rm.fk_id_rol = 6
group BY ms.modulo
;