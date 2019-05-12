USE para_testes;

CREATE TABLE IF NOT EXISTS gpa_aula (
id_aula INT PRIMARY KEY AUTO_INCREMENT,
nm_aula VARCHAR(255) NOT NULL,
nm_professor VARCHAR(255) ,
dt_criacao DATE NOT NULL,
observacao VARCHAR(255),
corretas TINYINT,
total TINYINT,
nao_respondidas TINYINT DEFAULT 0,
id_aluno INT,
id_disciplina INT
);

CREATE TABLE IF NOT EXISTS gpa_aluno (
id_aluno INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(255) NOT NULL,
email VARCHAR(255),
login VARCHAR(255) NOT NULL UNIQUE,
senha VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS gpa_disciplina (
id_disciplina INT PRIMARY KEY,
nm_disciplina VARCHAR(255)
);

ALTER TABLE gpa_aula ADD FOREIGN KEY(id_aluno) REFERENCES gpa_aluno (id_aluno);
ALTER TABLE gpa_aula ADD FOREIGN KEY(id_disciplina) REFERENCES gpa_disciplina (id_disciplina);


INSERT INTO gpa_disciplina VALUES
(1, 'Matemática'),
(2, 'Português'),
(3, 'Geografia'),
(4, 'História')
;

INSERT INTO gpa_aluno VALUES
(1, 'Igor Cedro', 'igorcedrlb@gmail.com', 'igorlb', '123'),
(2, 'Stephany Oliveira', null, 'teph', '123')
;

INSERT INTO gpa_aula VALUES
(1, 'Revolução Francesa', 'Marcos', STR_TO_DATE( "05/05/2019", "%m/%d/%Y" ), NULL, 7, 10, 0, 1, 4);

SELECT * FROM gpa_disciplina;
SELECT * FROM gpa_aluno;
SELECT * FROM gpa_aula;