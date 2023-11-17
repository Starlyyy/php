<?php

    $frutas = ['Limão', 'Morango', 'Ameixa', 'Banana', 'Maçã', 'Manga'];

    /** adicionarFrutas
     * 
     * Aqui deve ser n sei oq
     * 
     */

    //Type hint
    function adicionarFruta(string $fruta, array &$frutas): bool{

        if (array_search($fruta, $frutas) == false) {
            
            $fruitas[] = $fruta;
            return true;

        } else {
            
            return false;
        }
    
    }

    adicionarFruta('Abacate', $frutas);
