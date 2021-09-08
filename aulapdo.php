<?php
// String de conexão
$con = new PDO("mysql:host=localhost;dbname=db_crud_pdo", "root", "");

// INSERT : 
$con->query("INSERT INTO tbl_pessoa(nome_pessoa, telefone_pessoa, email_pessoa) VALUES ('Rubem','11111111', 'rubao@gmail.com');");

// UPDATE
$con->query("UPDATE tbl_pessoa SET email_pessoa='rubem@hotmail.com' WHERE id_pessoa='1';");

// DELETE 
$con->query("DELETE FROM tbl_pessoa WHERE id_pessoa='1';");

// SELECT
$busca = $con->query("SELECT * FROM tbl_pessoa;");
$dados = $busca->fetch(PDO::FETCH_ASSOC);

foreach($dados as $key => $valor){
    echo "$key = $valor <br>";
};

?>