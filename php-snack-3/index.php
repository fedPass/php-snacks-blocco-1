<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php

$numbers = random_number(1, 100, 15);
foreach ($numbers as $value) {
    echo $value . ' ';
};

function random_number($min, $max, $items_number) {
    //creo un array contenitore
    $list_numbers = [];
    //controllare che il nuovo array non superi la lunghezza stabilita
    while (count($list_numbers) < $items_number) {
        //genera numero random usando rand()
        $number = rand($min, $max);
        //se non è già in array pushalo
        if (!in_array($number,$list_numbers)) {
            $list_numbers[] = $number;
        }
    }
    return $list_numbers;
}
 ?>
