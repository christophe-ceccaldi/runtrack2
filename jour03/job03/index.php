<?php
//création des variables $str et $vowels//
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowel = ['a','e','i','o','u'];
//pour pacourir toute ma chaine de caractère//
for ($i=0 ;  isset ($str [$i]); $i++){
//pour parcourir le contenue de mon tableau 
for ($a=0 ; isset ($vowel [$a]); $a++){
//si tu idenfie des voyelles//
    if ($str [$i] == $vowel [$a])
//affiche les voyelles//
    echo $str [$i];
}
}
?>