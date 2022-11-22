<?php
//création de la fonction occurence et attributuon de ses arguments ($str, $char)//
function occurence($str, $char){
    //mise en place d'un compteur//
    $n=0;
    //pour pacourir toute la chaine de caractère avec isset avec [i] pour valeur index//
    for ($i=0 ;  isset($str[$i]); $i++) {
    //si tu pacours toute la chaine de caractère//
   if (($str[$i])){
        //si dans la chaine de caractère tu trouve un argument $char//
        if ($str[$i] == $char)
        //tu ajoutes par le biais du compteur +1//
        $n+=1;

    }
    }
    //retourne le résultat du compteur//
    return $n;
    
}
    //affiche avec la fonction occurence les arguments proposé c'est a dire dans la chaine de caractère 'sweat dreams' le nombre de 'a'//
    echo occurence('sweat dreams', 'a');


?>