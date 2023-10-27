<?php

$media = 0;

for ($i=0; $i < 4; $i++) { 
    
    $bimestre = $i + 1;
    $notas = readline("Qual foi a sua nota no $bimestre º bimestre? ");

    $media = $media + $notas;

}

print "Sua média foi: ";
print $media/4;
