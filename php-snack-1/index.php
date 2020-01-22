<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//recupero il parametro Nome
$name = $_GET['name'];
//estraggo al sua lunghezza
$name_lenght = mb_strlen($name);
if ($name_lenght < 3) {
    echo 'il nome deve contenere almeno 3 lettere..accesso negato';
} else {
    //se il nome è corretto procede con la verifica della mail
    //recupero mail
    $mail = $_GET['mail'];
    //verifico se è presente il punto
    //se manca il punto errore
    if (strpos($mail,'.') === false) {
        echo 'manca il . nella mail...accesso negato';
    } else {
        //se il punto c'è controlla la @
        //se la @ manca errore
        if (strpos($mail,'@') === false) {
            echo 'manca la @ nella mail...accesso negato';
        } else {
            //se ci sono entrambi passa a controllare l'età
            //recupero eta
            $eta = $_GET['age'];
            //verifico se è un numero
            //se non è numero Error
            if (!is_numeric($eta)) {
                echo 'non hai inserito un numero per gli anni...accesso negato';
            } else {
                //se è un Number
                echo 'ACCESSO RIUSCITO';
            }
        }
    }
}

 ?>
