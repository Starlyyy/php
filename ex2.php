<?php

$numeros = [];

for ($i=0; $i < 9; $i++) { 
    
    $numero_informado = readline("Informe um número: ");
    $numeros[] = $numero_informado;
}

rsort($numeros);

foreach ($numeros as $n) {
    print "$n \n";
}
