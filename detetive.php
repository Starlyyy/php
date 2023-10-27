<?php

$suspeito = 0;
$respostas = [];

$respostas[] = readline("Telefonou para a vítima? "); 
$respostas[] = readline("Esteve no local do crime? ");
$respostas[] = readline("Mora perto da vítima? ");
$respostas[] = readline("Devia para a vítima? ");
$respostas[] = readline("Já trabalhou com a vítima? ");

foreach ($respostas as $resp) { 
    if($resp == "sim"){
        $suspeito++;
    }
}

if($suspeito < 2){
    print "Inocente\n";
} else if ($suspeito == 2){
    print "Suspeito\n";
} else if ($suspeito == 3 || $suspeito == 4){
    print "Cúmplice\n";
} else {
    print "Assassino!!\n";
}
