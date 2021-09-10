<?php
//#create database federacao_brasil;

//use federacao_brasil;

//create table estados(
//id_estados int(5)primary key auto_increment,
//regiao varchar(15),
//comida_tipica varchar (50),
//populacao varchar (50)



//);

//select*from estados;

$con = new PDO("mysql:host=localhost;dbname=federacao_brasil", "root", "");

$con->query("INSERT INTO estados(regiao, comida_tipica, populacao)
 VALUES ('minas','tropeiro', '22milhoes');");

$con->query("UPDATE estados SET comida_tipica='carne-moida' WHERE id_estados='1';");

$con->query("DELETE FROM estados WHERE id_estados='50';");

$busca = $con->query("SELECT * FROM estados;");
$informacoes = $busca->fetch(PDO::FETCH_ASSOC);

foreach($informacoes as $key => $valor){
    echo "$key = $valor <br>";
};



?>
