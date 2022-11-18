<!DOCTYPE html>
<html>
    <body>
            <!--création du formulaire $_GET avec 2 champs input pour le texte (arguments) et le button pour envoyer-->
            <form action="" method="get">
                <label for="name">name</label>
                <input type="text" id="name" name="nom"/>
                <input type="text" id="prenom" name="prénom"/>
                <input type="submit" id="button" />
            </form>
        <!--partie php-->
        <?php
        //mise en place du compteur//
            $n = 0;
            //boucle foreach $_GET pour récupérer le nombre d'arguments et création de la variale $arg avec as et utilisation du compteur// 
            foreach ($_GET as $arg){
                $n++;
            }
            //affichage avec echo du nombre d'arguments trouvé avec la fonction $_GET et affichage par le biais de la variable du compteur $n// 
            echo "le nombre d'arguments GET envoyé $n";
        ?>
        
    </body>
</html>