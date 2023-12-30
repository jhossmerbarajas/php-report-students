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

INSERT INTO dbo.students (name, last_name, course_id) VALUES 
	('david', 'barajas', 1),
	('jhoe', 'ramirez', 2);


-- Eliminar tablas
DROP TABLE students;