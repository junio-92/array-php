create database federacao_brasil;

use federacao_brasil;

create table estados(
id_estados int(5)not null primary key auto_increment,
regiao char(15),
comida_tipica char (25),
populacao varchar (25)



);




Delete from estados where id_estados in (40,41);
 

select*from estados;
