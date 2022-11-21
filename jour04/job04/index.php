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
            <input type="text" id="prenom" name="prenom"/>
            <input type="text" id="nom" name="nom"/>
            <input type="submit" id="button"/>
        </form>

        <table>
            <!-- haut du tableau-->
            <thead>
                <tr><th>arguments</th> <th>valeurs</th></tr>
            </thead>

            <tbody>
                 <!--partie php-->
                <?php
                /*utilisation de la boucle foreach avec $_POST pour lire et récupérer les arguments et les => valeurs création 
                des variables $key et $value avec as*/
                foreach ($_POST as $key => $value){
                    echo "<tr><td>$key</td> <td>$value</td></tr>";
                } 
            
                ?>
            </tbody>
        </table>
        
        
        
    </body>
</html>