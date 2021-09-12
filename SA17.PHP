<?php

$con = new PDO("mysql:host=localhost;dbname=cadastro_de_pacientes", "root");
$con->query("INSERT INTO cadastro(Rua,Logradouro,Numero,Complemento,Bairro,
CEP,Email,Telefone_Fixo,Celular,Telefone_Secundario,Tipo_de_Cadastro,Data) 
VALUES ('Rua Ceuta','Casa','89','null','Serra Verde','31876543212','Ana743@gmail.com',
'3455-2480','314560-4320','345580-4578','Convenio','2021-09-01');");
?>