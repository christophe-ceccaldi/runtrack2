<?php
//pour définir les variable et l'incrémentation//
for ($i = 0; $i < 101; $i++) {
    //si affichage du nombre multiple de 3 et de 5 affiche FizzBuzz//
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzzz<br/>";
    }
    //et si affichage du nombre multiple de 3 affiche Fizz//
    elseif ($i % 3 === 0){
        echo "Fizz<br/>";
    }
    //si affichage du nombre multiple de 5 affiche Buzz//
    if ($i % 5 === 0){
            echo "Buzz<br/>";
    }
    //et puis commande va a la ligne entre chaque valeur//
    else {
        echo $i . "<br />";
    }
}
?>