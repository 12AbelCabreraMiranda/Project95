create view cant_alumnosEn_cursos_escuela as

SELECT count(avancepuntos.id_curso)as cursos_en_escuela, cursos.nombreCurso, estudiante.id_usuario_maestro as maestro_escuela

FROM avancepuntos

inner join cursos on cursos.idCursos = avancepuntos.id_curso
inner join estudiante on estudiante.idEstudiante = avancepuntos.id_estudiante

where nombreCurso='Vocales' and id_usuario_maestro=1
-- group by avancepuntos.id_curso
