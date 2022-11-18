<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!--création du formulaire $_POST avec 2 champs input pour le texte (arguments) nom et prénom et le button pour envoyer-->
        <form action="" method="post">
            <input type="text" id="nom" name="nom"/>
            <input type="password" id="password" name="password"/>
            <input type="submit" id="button"/>
        </form>

        <table>
            <thead>
                <!-- haut du tableau-->
                <tr><th>Username</th><th>Password</th></tr>
            </thead>

            <tbody>
                 <!--partie php-->
                <?php
                    /*fonction isset qui permet de partir sur une page vierge sans utilisation 
                    de isset même si l'algorythme fonctionne un message d'erreur apparait avant de rentrer des arguments*/ 
                    if (isset($_POST["nom"])){
                    // algorythme avec $_POST qui permet de vérifiez si le username et le password sont correcte//
                    if ($_POST["nom"]=="John" && $_POST["password"]=="Rambo"){
                    //si le username et le password sont correcte echo affiche "Ce n'est pas ma guerre"//
                    echo "Ce n'est pas ma guerre";
                    }
                    //et sinon (si ce n'est pas le cas) echo affiche "Votre pire cauchemard"//
                    else {echo "Votre pire cauchemard";
                    }  
                }
                ?>
            </tbody>
        </table>
        
        
        
    </body>
</html>