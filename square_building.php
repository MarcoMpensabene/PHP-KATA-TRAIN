<?php
function generateShape(int $n)
{
    $square = '';
    for ($i = 0; $i < $n; $i++) {
        $square .= str_repeat('+', $n);
        // Aggiungi una linea solo se non è ultima riga
        if ($i < $n - 1) {
            $square .= "\n";
        }
    }
    return $square;
}
