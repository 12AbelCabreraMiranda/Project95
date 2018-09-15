alter view mis_estudiantes_y_cursos as

select count(mis_cursos.id_estudianteA)as cant_examen_hecho, estudiante.codigoEstudiante, estudiante.nombre, estudiante.apellido,estudiante.edad, estudiante.id_usuario_maestro

from mis_cursos
inner join estudiante on estudiante.idEstudiante = mis_cursos.id_estudianteA
inner join cursos on cursos.idCursos = mis_cursos.id_cursoA

-- where id_usuario_maestro=1
group by mis_cursos.id_estudianteA
order by nombre asc

