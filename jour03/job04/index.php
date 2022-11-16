<?php 
//création de la variable//
$str = "Dans l'espace, personne ne vous entend crier";
//pour pacourir toute ma chaine de caractère//
//créer compteur avec var n//
$n = 0;
for ($i=0 ;  isset ($str [$i]); $i++){
    $n = $n +1;
}   
$j =0;
for ($i=0; $i<$n; $i++){
    if ($str[$i] == ' '){
        $j =$j+1;
    }
    elseif ($str[$i] == ','){
        $j = $j+1;
    }
    elseif ($str[$i] == '\''){
        $j =$j+1;
    }
    }
    echo $n-$j;
?>