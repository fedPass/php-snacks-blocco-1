<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
PM in un rettangolo verde. -->

<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<?php
foreach ($db as $ruole => $persons) {
    if($ruole == 'teachers') { ?>
        <div style="background-color:grey" class="teacher">
            <h2>Teachers</h2>
    <?php } else { ?>
        <div style="background-color:green" class="pm">
            <h2>PM</h2>
            <?php }
                foreach ($persons as $person) {
                echo "Nome: ".$person['name'].', Cognome:'.$person['lastname'].'<br>'; ?>
            <?php } ?>
        </div>
<?php } ?>
