<?php

$con = new PDO("mysql:host=localhost;dbname=medico_plano", "root");
$con->query("INSERT INTO medico(Rua,Logradouro,Numero,Complemento,Bairro,
CEP,Email,Telefone_Fixo,Celular,Telefone_Secundario,Tipo_de_Cadastro,Data) 
VALUES ('Rua Ceuta','Casa','89','null','Serra Verde','31876543212','Ana743@gmail.com',
'3455-2480','314560-4320','345580-4578','Convenio','2021-09-01');");
?>