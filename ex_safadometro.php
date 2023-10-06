<?php

$dia = readline("informe o seu dia de nascimento: ");
$mes = readline("Informe o seu mês de nascimento: ");
$ano = readline("Informe o seu ano de nascimento: ");

safadometro($dia, $mes,$ano);

function safadometro(int $dia,int $mes,int $ano){
    
    $safadeza = 0;
    $anjeza = 0;
    
    $safadeza = somatorio($mes) + ($ano/100) * (50-$dia);
    $anjeza = 100 - $safadeza;

    print "$anjeza% anjo perfeito, mas aquele $safadeza% não é anjo.. é safado!!\n";

}

function somatorio (int $mes){

    $soma = 0;
    
    $soma = $mes * (($mes+1)/2); 

    return $soma;
}
