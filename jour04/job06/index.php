<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <!--création du formulaire $_GET avec 1 champ input pour le nombre (arguments) le button pour envoyer-->
        <form action="" method="get">
            <input type="text" id="nombre" name="nombre"/>
            <input type="submit" id="button"/>
        </form>
         <!--partie php-->
        <?php
        /*fonction isset qui permet de partir sur une page vierge sans utilisation 
        de isset même si l'algorythme fonctionne un message d'erreur apparait avant de rentrer des arguments*/
        if (isset($_GET['nombre']) != ""){
            //algorythme avec $_GET pour pemmetre d'identifier les chiffre paire avec l'utilisation du modulo %//
            if (($_GET['nombre'] % 2) == 0){
                //si l'algorythme identifie un chiffre pair echo affiche le nombre et " est paire"// 
                echo $_GET['nombre'] . " est paire";
            }
            else {
                //sinon si l'algorythme n'idenfie pas de nombre pair (par défaut) affiche le nombre et " est impaire"//
                echo $_GET['nombre'] . " est impaire";
        }
        }

        ?>
    </main>
    
</body>
</html>