<?php

    //include 'logica.php';

    $pokemons_api = file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0');
    $pokemons = json_decode($pokemons_api, true);

    for($i = 0; $i < 10; $i++){

        $pokemon = $pokemons['results'][$i];

        $todas_infos_api = file_get_contents($pokemon['url']);
        $pokemons['results'][$i] = json_decode($todas_infos_api, true);

    }

    if (isset( $_GET['campo_busca'])) {

        $encontrados = [];

        foreach ($pokemons['results'] as $poke) {
            
            if (str_contains($poke['name'], $_GET['campo_busca'])) {
                
                $encontrados[]= $poke;

            }

        }

        $pokemons = $encontrados;

    }


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

            #Pesquisa input[type="text"]{
                
                width: 300px;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 15px;
                font-size: 15px;

            }

            #Pesquisa input[type="submit"]{
                
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 15px;

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
                height: 150px;

            }

        </style>

    </head>

    <body>
        
        <div id="Pesquisa">

            <form method="get">
                <input type="text" name="campo_busca" placeholder="Digite o nome de um Pokémon" >
                <input type="submit" value="Buscar" >
            </form>

        </div>

        <div id="Pokémons">

            <?php for($i = 0; $i < count($pokemons); $i++): ?>

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
