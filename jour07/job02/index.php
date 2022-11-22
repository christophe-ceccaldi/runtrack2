<?php
//création de la fonction bonjour et de son argument ($jour)//
function bonjour ($jour){
    //si l'argument $jour est égal à true affiche bonjour//
    if ($jour === True){
        echo "Bonjour";
    }
    //sinon (ds d'autre cas) affiche bonsoir// 
    elseif ($jour === False){
        echo "Bonsoir";
    }
}
//lancement de la fonction bonjour true donc affichage bonjour//
bonjour(True)
?>