<?php
//création de la fonction leetSpeak avec son argument $str//
function leetSpeak($str){
    //pour parcourir la chaine de caractère avec isset avec [i] pour valeur index//
    for ($i=0 ;  isset($str[$i]); $i++) {
        //lorsque tu parcours la chaine de caractère//
        switch ($str[$i]){
            //dans le cas ou c'est un A ou un a pacours la chaine de caractère jusqu'au A et affiche a la place un 4 puis arrete toi//
            case "A":
            case "a":
                $str[$i]= 4;
                break;
                //dans le cas ou c'est un B ou un b pacours la chaine de caractère jusqu'au A et affiche a la place un 8 puis arrete toi//
            case "B":
            case "b":
                $str[$i]= 8;
                break;
                //dans le cas ou c'est un E ou un e pacours la chaine de caractère jusqu'au A et affiche a la place un 3 puis arrete toi//
            case "E":
            case "e":
                $str[$i]= 3;
                break;
                //dans le cas ou c'est un G ou un g pacours la chaine de caractère jusqu'au A et affiche a la place un 6 puis arrete toi//
            case "G":
            case "g":
                $str[$i]= 6;
                break;
                //dans le cas ou c'est un L ou un l pacours la chaine de caractère jusqu'au A et affiche a la place un 1 puis arrete toi//
            case "L":
            case "l":
                $str[$i]= 1;
                break;
                //dans le cas ou c'est un S ou un s pacours la chaine de caractère jusqu'au A et affiche a la place un 5 puis arrete toi//
            case"S":
            case"s":
                $str[$i]= 5;
                break;
                //dans le cas ou c'est un T ou un t pacours la chaine de caractère jusqu'au A et affiche a la place un 7 puis arrete toi//
            case"T":
            case"t":
                $str[$i]= 7;
                break;
            //valur par défaut nul//
            default:
                
           
    
        }
    }
    //retourne le résultat de mon argument $str qui sera de remplacer les lettre défini par les chiffre défini//
    return $str; 
}
//affiche la fonction leetSpeak sur l'argument entre parenthèse "i'm not a number, i'm a free man"//
echo leetSpeak("i'm not a number, i'm a free man");
?>