<?php

//funções variadas

function exibircarro ($carro,$carro2,$carro3){
    echo "O nome do carro é $carro2";
}
exibircarro("Uno","Gol","Palio");


echo "<br><br>";

//função calculo


function multiplicar($mult, $v1, $v2,$v3){

$mult = 2*4*7;
echo "O resultado da multiplicação é $mult";
}

multiplicar("resultado",4,6,8);

echo "<br><br>";



function divisao($d2,$d3){
    $dividir=$d2/$d3;

    return $dividir;
}

echo divisao(200,2);

echo "<br><br>";

// Array e foreach 

$paises = array("Brasil", "Argentina","Mexio");
foreach($paises as $nomes):
    echo $nomes."<br>";
endforeach;


?>