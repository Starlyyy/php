<?php

$chute = 0;
$sorteado = rand(1,100);

while($chute != $sorteado){

    $chute = (int) readline("Digite um número: ");

    if ($chute == $sorteado){
        print "Você venceu!\n";
    } else {

        if($chute > $sorteado){
            print "Seu chute foi mais alto do que o número correto\n";
        } else {
            print "Seu chute foi mais baixo do que o número correto\n";
        }
    }
}

print "END OF THE GAME\n";
