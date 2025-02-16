<?php
function count_smileys($arr)
{
    $pattern = '/^[:;][-~]?[)D]$/'; // Regex per faccine valide
    $count = 0; // Contatore 

    foreach ($arr as $face) {
        if (preg_match($pattern, $face)) { //verificare se una stringa corrisponde al pattern
            $count++; // Incrementa il contatore se la faccina è valida
        }
    }

    return $count; // Restituisce il numero totale di faccine sorridenti
}
