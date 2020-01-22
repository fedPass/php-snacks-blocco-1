<!-- Creare un array di array: ogni array figlio avrà come chiave una data in questo
formato: DD-MM-YYYY (es 01-01-2007) e come valore un array di post
associati a quella data.
Stampare ogni data con i relativi post.

Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
// echo '<pre>';
// var_dump($posts);
// echo '</pre>';
//scorro l'array posts ed estraggo le chiavi(data) e le info delle conversazioni
foreach ($posts as $data => $conversazioni) {
    echo '<strong>Data: ' . $data . '</strong><br>';
    // echo '<pre>';
    // var_dump($conversazioni);
    // echo '</pre>';
    foreach ($conversazioni as $info => $value) {
        echo 'Titolo: '. $value['title'].'<br>';
        echo 'Autore: '. $value['author'].'<br>';
        echo 'Testo: '. $value['text'].'<br>';
        echo '<br>';
    }
    echo '<hr>';
}

?>
