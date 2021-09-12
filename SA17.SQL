create database cadastro_de_pacientes;
use cadastro_de_pacientes;

create table cadastro(
id_cadastro int (5)not null primary key auto_increment,
Rua VARCHAR(45) ,
	Logradouro VARCHAR(45),
	Numero INT(5),
	Complemento VARCHAR(45),
	Bairro VARCHAR (45),
	CEP INT(11),
	Email VARCHAR(45),
	Telefone_Fixo INT(10),
	Celular INT(10),
	Telefone_Secundario INT(10),
	Tipo_de_Cadastro CHAR(15),
     Data DATE 
);
Delete from cadastro where id_cadastro in (2);
select*from cadastro;

