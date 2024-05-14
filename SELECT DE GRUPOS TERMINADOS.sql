-- SELECT DE GRUPOS TERMINADOS
SELECT 
g.gid,
                g.gciudad,
                p.pnombre,
                g.gcapacidad,
                g.gfoto_grupo,
                
ghd.hodesc,ghh.hohdesc,
                
                g.gintensivo,g.grupoespecial,g.gsweb,
					 
pc.marca ,
                
                g.gf_inicio,
                g.gf_termino,
                (
                	SELECT
                	JSON_ARRAYagg(JSON_OBJECT(
						 'id',u.id
						 ))
						FROM tbl_usuarios u
							INNER JOIN pv_grupos_usuarios gu ON u.id = gu.fk_id_usuario 
							WHERE u.fk_id_rol = 6 AND gu.fk_id_grupo = g.gid
					 ) 'alumnos'
                

            FROM grupos g
            INNER JOIN programas p ON g.pid = p.pid
				left JOIN programas_certificaciones pc ON p.pcertificacion = pc.id
            INNER JOIN grupos_horarios_dias ghd ON g.hoid = ghd.hoid
            INNER JOIN grupos_horarios_horas ghh ON g.hohid = ghh.hohid
            WHERE g.gstatus = 2
            ORDER BY g.gf_inicio DesC
            LIMIT 64;