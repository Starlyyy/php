<?php

    //$musicas = ["Mo Bamba", "Sheck Wes","Rap"];
    //var_dump($musicas);

    print"***TOP FAIVE HEROIS DO MUNDO***\n";
    $herois = ['Brama xelada','Thomas Rodsom','Hulk Magrelo','Flamengo','JoJo Toddynho'];

    //shuffle($herois);
    sort($herois);

    for($i=0;$i < sizeof($herois);$i++){
        
        print($i+1) . "° lugar: $herois[$i] \n";
        
    }
