<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

    $class = [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
            'vote' => [2, 4, 6]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'vote' => [8, 10, 12]
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
            'vote' => [14, 16, 18]
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini',
            'vote' => [20, 22, 24]
        ]
    ];

    foreach ($class as $student => $value) {
        echo 'Nome: '. $value['name'].'<br>';
        echo 'Cognome: '. $value['lastname'].'<br>';
        // echo '<pre>';
        // var_dump($value['vote']);
        // echo '</pre>';
        print_vote($value['vote']);
        $media = calc_average($value['vote']);
        echo 'Media Voti: '. $media.'<br>';
        echo '<hr>';
    }

    function print_vote($array) {
        echo 'voti: ';
        foreach ($array as $key => $value) {
            echo $value. ' ';
        }
        echo "<br>";
    }

    function calc_average($array) {
        $amount = 0;
        for ($i=0; $i < count($array); $i++) {
            $amount = $amount + $array[$i];
        }
        $average = $amount / count($array);
        return $average;
    }


?>
