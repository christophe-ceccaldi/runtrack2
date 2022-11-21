<?php 
//création de la variable//
$str = "Dans l'espace, personne ne vous entend crier";
//pour pacourir toute ma chaine de caractère//
//créer compteur avec var n//
$n = 0;
//pour parcourir et vérifiez toute ma chaine de caractère avec isset et l'incrémenter avec $i++)
for ($i=0 ;  isset ($str [$i]); $i++){
    $n = $n +1;
}   
$j =0;
//pour parcourir ma chaine de caractère//
for ($i=0; $i<$n; $i++){
    //si la chaine de caractère comprend en espace donc " " compte +1"//
    if ($str[$i] == ' '){
        $j =$j+1;
    }
    //si la chaine de caractère comprend une donc ", " compte +1"//
    elseif ($str[$i] == ','){
        $j = $j+1;
    }
    //si la chaine de caractère comprend un apotrophe donc "\'" compte +1"//
    elseif ($str[$i] == '\''){
        $j =$j+1;
    }
    //affiche avec echo le résultat de $n ma chaine de carractère moins la somme des carrectère indésirable comme espace , ou 'dpnc $j//
    }
    echo $n-$j;
?>

