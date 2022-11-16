<?php
//pour définir les variable et l'incrémentation//
for ($i = 0; $i < 1337; $i++) {
    //si le décompte arrive aux nombre 26,37,88,1111 do not display//
    if ($i === 26 || $i === 37 || $i === 88 || $i === 1111) {
        echo   "" ;
    }
    //et puis commande va a la ligne entre chaque valeur//
    else{echo $i . "<br />";
    }
}
?>