CREATE EXTENSION IF NOT EXISTS "uuid-ossp";
SELECT uuid_generate_v1();

CREATE TABLE tpessoa(
	id UUID DEFAULT uuid_generate_v4(),
	nome VARCHAR(20) NOT NULL,
	dt_nascimento DATE NOT NULL,
	CONSTRAINT pk_tpessoa PRIMARY KEY(id)
);

CREATE TABLE tpessoa_endereco(
	id UUID DEFAULT uuid_generate_v4(),
	logradouro VARCHAR(50) NOT NULL,
	numero INT NOT NULL,
	cep VARCHAR(9) NOT NULL,
	pessoa_id UUID DEFAULT uuid_generate_v4(),
	CONSTRAINT pk_tpessoa_endereco PRIMARY KEY(id),
	CONSTRAINT fk_tpessoa_endereco_tpessoa FOREIGN KEY(pessoa_id)
		REFERENCES tpessoa(id) ON DELETE CASCADE
);