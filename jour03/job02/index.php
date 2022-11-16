<?php
//création de la variable du texte str//
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
//pour pacourir tout les mots//
for ($i=0 ;  isset ($str [$i]); $i++){
    //affiche les lettres seulement pair//
    if ($i % 2 == 0){
        echo $str [$i];
    }
}


?>