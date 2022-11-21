<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>

    <body>
        <!--création du formulaire $_GET avec 2 champs input pour le texte (arguments) nom et prénom et le button pour envoyer-->
        <form action="" method="get">
            <input type="text" id="prenom" name="prenom"/>
            <input type="text" id="nom" name="nom"/>
            <input type="submit" id="button"/>
        </form>

        <table>
            <thead>
                <!-- haut du tableau-->
                <tr><th>arguments</th> <th>valeurs</th></tr>
            </thead>

            <tbody>
                <!--partie php-->
                <?php
                /*utilisation de la boucle foreach avec $_POST pour récupérer les arguments et les => valeurs création 
                des variables $key et $value avec as*/
                foreach ($_GET as $key => $value){
                    //affichage des arguments et des valeurs avec echo//
                    echo "<tr><td>$key</td> <td>$value</td></tr>";
                } 
            
                ?>
            </tbody>
        </table>
        
        
        
    </body>
</html>