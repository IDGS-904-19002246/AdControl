SELECT
	ep.id,
	ep.pregunta,
	ep.valor,
	ep.abierta,
	(
		SELECT JSON_ARRAYAGG(JSON_OBJECT(
			'id',er.id,
			'respuesta',er.respuesta
		))
		FROM tbl_evaluacion_respuestas er
		WHERE er.fk_id_pregunta = ep.id
	)'respuestas'
FROM tbl_evaluacion_preguntas ep
WHERE ep.fk_id_evaluacion = 1;

INSERT INTO pv_respuesta_usuario
(fk_id_usuario,fk_id_respuesta,respuesta_abierta)VALUES
(1,1,'')
,
(2,5,''),
(3,6,'todo bien');