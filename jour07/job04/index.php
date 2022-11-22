<?php
//création de la fonction calcule et de ses arguments ($a,$operation,$b)//
function calcule($a,$operation,$b){
    //mise en place d'un compteur $total//
    $total= 0;
    //définir les différente possibilité de l'argument $operation//
    switch ($operation){
        //dans le cas ou $operation est un +//
        case "+";
        //le compteur est égal argument $a + argument $b//
        $total= $a+$b;
        break;
        //dans le cas ou $operation est un -//
        case "-";
        //le compteur est égal argument $a - argument $b//
        $total= $a-$b;
        break;
        //dans le cas ou $operation est un *//
        case "*";
        //le compteur est égal argument $a * argument $b//
        $total= $a*$b;
        break;
        //dans le cas ou $operation est un diviser//
        case "/";
        //le compteur est égal argument $a diviser argument $b//
        $total= $a/$b;
        break;
        }
        //retour est le résultat de l'opération//
    return $total;
    }
    //affiche la fonction calcule avec les arguments contenue dans la parenthèse//
    echo calcule(5, "*", 2); 
?>