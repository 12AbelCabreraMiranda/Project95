alter view vocales_puntos as
select estudiante.id_usuario_maestro,estudiante.codigoEstudiante,estudiante.nombre,estudiante.apellido, cursos.nombreCurso, avancepuntos.puntos

from avancepuntos

inner join estudiante on estudiante.idEstudiante = avancepuntos.id_estudiante
inner join cursos on cursos.idCursos = avancepuntos.id_curso

where nombreCurso='Vocales'
order by  estudiante.nombre asc