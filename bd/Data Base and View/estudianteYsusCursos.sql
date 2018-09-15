alter view estudianteYsusCursos as
SELECT estudiante.codigoEstudiante, estudiante.nombre,estudiante.apellido, cursos.nombreCurso

FROM mis_cursos

inner join estudiante on estudiante.idEstudiante = mis_cursos.id_estudianteA
inner join cursos on cursos.idCursos = mis_cursos.id_cursoA

order by estudiante.codigoEstudiante asc

