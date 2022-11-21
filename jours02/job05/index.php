<?php
//pour définir la variable et l'incrémentation//
for ($i = 2; $i < 1001; $i++) {
    //variable pas nombre primaire = faux//
    $notAPrime = false;
    //algo pour parcourir et arreter la loop pour trouver les nombre premier uniquement//
    for ($num = 2; $num < $i; $num++) {

        if (($i % $num) == 0) {
            $notAPrime = true;
            break;
        }
    }

    //affichage si ce n'est pas un nombre premier//
    if (!$notAPrime) {
        echo $i . "<br/>";
    }

    }
?>