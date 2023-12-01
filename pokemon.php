<?php

    // $nome_pokemon = readline("Me dê o nome de um pokemon e eu lhe dou as informações sobre ele: ");
    $nome_pokemon = strtolower($nome_pokemon); //deixa o nome do pokemon em minusculo para que o codigo funcione

    $dados_em_texto = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$nome_pokemon}");

    $pokemon = json_decode($dados_em_texto, true);

    print("Nome: " . strtoupper($pokemon['name']) . "\n");
    print("Movimentos: \n");

    foreach ($pokemon['moves'] as $move) {
        
        print(" - " . $move['move']['name'] . "\n");

    }

    print("Altura: " . $pokemon['height'] . "\n");
    print("Peso: " . $pokemon['weight'] . "\n");
    print("Tipo(s):\n");

    foreach ($pokemon['types'] as $type) {
        
        print(" - " . $type['type']['name'] . "\n");

    }
