<?php
//crétion du tableau php avec les valeurs inclus//
$recipes = [200 , 204, 173, 98, 171 , 404, 459] ;
// pour parcourir la liste de 7 chiffres du tableau//
for  ($a=0; $a<7; $a++) {
    //création de la variable i pour utilisation dans l'operation de la division//
    $i = $recipes[$a];
    //si le nombre dans la liste parcourue est pair affiche "est paire"//
    if (($i % 2) == 0) {
        echo $i . " est paire <br/>";
        //sinon affiche est impaire//
    } else {
        echo $i . " est impaire<br/>";
    }

}
?>