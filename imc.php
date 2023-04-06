<?php

$altura = 1.86;
$peso = 100;

$imc = $peso / $altura**2;
$imc = number_format($imc,1,'.');

if ($imc < 17){
    $situacao = "Muito abaixo do peso";
}else if ($imc < 18.5){
    $situacao = "Abaixo do peso";
}else if ($imc < 25){
    $situacao = "Peso normal";
}else if ($imc < 30){
    $situacao = "Acima do peso";
}else if ($imc < 35){
    $situacao = "Obesidade grau I";
}else if ($imc < 40){
    $situacao = "Obesidade grau II";
}else{
    $situacao = "Obesidade grau III";
}

echo"Seu IMC é: $imc". PHP_EOL;
echo "Sua situação é de: $situacao";