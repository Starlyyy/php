<?php

$chute = 0;

while($chute != 42){

    $chute = (int) readline("Digite um número: ");

    if ($chute == 42){
        print "Você venceu!\n";
    } else {

        if($chute > 42){
            print "Seu chute foi mais alto do que o número correto\n";
        } else {
            print "Seu chute foi mais baixo do que o número correto\n";
        }
    }
}

print "END OF THE GAME\n";
