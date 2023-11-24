<html>
    <head>

        <title>Pokedex</title>

        <style>


            #Pesquisa { 

                background: #c92626;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 20px; 
                text-align: center;
                
            }

            .Pokémon {
                
                width: 20%;
                border: solid 5px #F6BFC4;
                padding: 15px; /* Margem interna */
                margin: 10px 10px 10px 10px;
                float: left;

            }

            .Pokémon img {

                max-width: 100%;

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

                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/700.png" alt="Sylveon" width="350px">
                
                <h1>Sylveon</h1>
                <p>Peso: 23.5 kg</p>
                <p>Altura: 1.0 m</p>

            </div>

            <?php endfor; ?>

        </div>

    </body>
</html>
