<?php
function smaller(array $nums): array
{
    $result = []; //array contenitore 

    //cicla array
    for ($i = 0; $i < count($nums); $i++) {
        $count = 0;

        // compara elemento corrente col successivo
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$j] < $nums[$i]) {
                $count++;
            }
        }
        //aggiungi risultato nell'array
        $result[] = $count;
    }

    return $result;
}
