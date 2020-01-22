<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

foreach ($_GET as $key => $value) {
    echo  $key . ' : ' . $value . '<br>';
}

 ?>
