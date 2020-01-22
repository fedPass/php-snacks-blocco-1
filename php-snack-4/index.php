<!-- Creare un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il
paragrafo e suddividerlo in tanti paragrafi: ogni volta che si incontra un punto,
bisogna creare un nuovo paragrafo. -->

<?php
$long_text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ';

echo 'Testo originale: '.$long_text;
echo '<hr>';
//scompongo in frasi dividendo il testo lungo ad ogni punto
$phrase = explode(".", $long_text);
// echo '<pre>';
// var_dump($phrase);
// echo '</pre>';

//primo modo mi spuntano 8 frasi
// foreach ($phrase as $key => $value) {
//     echo '<p>Frase '.$key.':'.$value.'</p>';
// }

//secondo modo
for ($i=0; $i < (count($phrase)-1); $i++) {
    echo '<p>Frase '.$i.':'.$phrase[$i].'</p>';
}
 ?>
