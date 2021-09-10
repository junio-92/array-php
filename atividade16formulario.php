<?php
if(isset($_POST['regiao'], $_POST['comida'], $_POST['populacao'])) {
    $regiao = $_POST['regiao'];
    $comida = $_POST['comida'];
    $populacao = $_POST['populacao'];
}



try {
    
$con = new PDO("mysql:host=localhost;dbname=federacao_brasil", "root", "");

} catch (PDOException $e) {
    echo "falha no banco de dados: " . $e->getMessage();
} catch (Exception $e) {
    echo "Falha: " .$e->getMessage();
}

$mandar = $con->prepare("INSERT INTO estados (regiao,comida_tipica, populacao) VALUES (:r, :c, :p)");
$mandar->bindParam(":r", $regiao);
$mandar->bindParam(":c", $comida);
$mandar->bindParam(":p", $populacao);
$mandar->execute();





?>