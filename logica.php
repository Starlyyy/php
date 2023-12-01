<?php

    //include 'logica.php';

    $pokemons_api = file_get_contents('https://pokeapi.co/api/v2/pokemon');
    $pokemons = json_decode($pokemons_api, true);

    for($i = 0; $i < 20; $i++){

        $pokemon = $pokemons['results'][$i];

        $todas_infos_api = file_get_contents($pokemon['url']);
        $pokemons['results'][$i] = json_decode($todas_infos_api, true);

    }


    // print '<pre>';
    // print_r($pokemons['results']);
    // print '</pre>';
    // die;

    // $dados_em_texto = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$nome_pokemon}");

    // $pokemon = json_decode($dados_em_texto, true);


?>

<html>
    <head>

        <title>Pokedex</title>

        <style>


            #Pesquisa { 

                background: #c92626;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 15px; 
                text-align: center;
                
            }

            .Pokémon {
                
                width: 15%;
                border: solid 4px #000;
                padding: 10px; /* Margem interna */
                margin: 10px 10px 10px 10px;
                float: left;
                text-align: center;

            }

            .Pokémon img {

                max-width: 70%;

            }

        </style>

    </head>

    <body>
        
        <div id="Pesquisa">

            <form>
                <input type="text" placeholder="Digite o nome de um Pokémon" >
                <input type="submit" value="Buscar" >
            </form>

        </div>

        <div id="Pokémons">

            <?php for($i = 0; $i < 20; $i++): ?>

            <div class="Pokémon">

                <img src="<?= $pokemons['results'][$i]['sprites']['other']['dream_world']['front_default']?>" alt="" width="350px">
                
                <h1><?= $pokemons['results'][$i]['name']?></h1>
                <p>Peso: 23.5 kg</p>
                <p>Altura: 1.0 m</p>

            </div>

            <?php endfor; ?>

        </div>

    </body>
</html>
