USE report;

-- Vista de todas la tablas
SELECT name FROM sys.tables;

-- Creación de tablas
CREATE TABLE students (
	id INT NOT NULL IDENTITY PRIMARY KEY,
	name VARCHAR(20),
	last_name VARCHAR(20),
	email VARCHAR (50)
);

CREATE TABLE courses (
	id INT NOT NULL PRIMARY KEY IDENTITY,
	name VARCHAR (20)
);


-- Descripción de tablas
EXEC sp_columns 'students';


-- Creación de Relaciones
ALTER TABLE students ADD course_id INT NOT NULL;
ALTER TABLE students ADD CONSTRAINT fk_course_id
	FOREIGN KEY (course_id) REFERENCES courses(id);



-- Insersiones
INSERT INTO dbo.courses (name) VALUES 
	('Ing Civil'),
	('Ing Sistemas'),
	('Admin. Empresas')

INSERT INTO dbo.students (name, last_name, email, course_id) VALUES 
	('david', 'barajas', 'david@david', 3),
	('jhossmer', 'ramirez', 'jhoss@jhoss', 3),
	('maria', 'vargaz', 'maria@maria', 1),
	('jhoe', 'ramirez', 'jhoe@jhoe', 2);


-- Consultar tablas
SELECT * FROM dbo.students;
SELECT * FROM dbo.courses;


-- Consulta relacionadas
SELECT dbo.students.name, dbo.courses.name
	FROM dbo.students
	JOIN dbo.courses
	ON dbo.students.course_id = dbo.courses.id;


SELECT s.name, s.last_name, s.email, c.name
			FROM students AS s
			JOIN courses AS c
			ON c.id = s.course_id
-- Eliminar tablas
DROP TABLE students;


-- Numéro de puerto 
SELECT DISTINCT local_net_address, local_tcp_port
FROM sys.dm_exec_connections
WHERE local_net_address IS NOT NULL;


-- Cambio de nombre del campo en tablas
EXEC sp_rename 'courses.name', 'course_name', 'COLUMN';
