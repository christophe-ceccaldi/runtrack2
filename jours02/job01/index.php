<?php
//pour définir les variable et l'incrémentation//
for ($i = 0; $i < 1337; $i++) {
    //si affichage du nombre 42 en bold et souligné//
    if ($i === 42) {
        echo   "<b><u>$i</b></u></br>" ;
    }
    //et puis commande va a la ligne entre chaque valeur//
    else{echo $i . "<br />";
    }
}

?>

    