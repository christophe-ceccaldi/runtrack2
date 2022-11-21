<?php
//pour définir la variable et l'incrémentation//
for ($i = 0; $i < 100; $i++) {
    //si affichage en dessous de 20 affiche en italique//
    if ($i < 21) {
        echo   "<i>$i</i></br>";
        //si affichage entre 25 et 50//
    }
        elseif ($i > 24 && $i < 51){
        // et si le nombre 42 s'affiche remplace par "La plateforme"//
        if ($i === 42){
            echo "La plateforme<br/>";
             //et si affichage entre 25 et 50 affiche en souligné//
        }
        else {
            echo "<u>$i</u><br />";
        }
        //et puis commande va a la ligne entre chaque valeur//
         }else {
        echo $i . "<br />";
    }
}
?>
