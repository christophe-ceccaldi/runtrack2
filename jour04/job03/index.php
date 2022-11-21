<!DOCTYPE
<html>
    <head>
      <meta charset="UTF-8">  
    </head>
    <body>
        <header>

        </header>
        <main>
            <!--création du formulaire $_POST avec 2 champs input pour le texte (arguments) nom et prénom et le button pour envoyer-->
            <Form method="post">
                <input type="text" id="name" name="nom"/>
                <input type="text" id="prenom" name="prénom"/>
                <input type="submit" id="button" />
            <!--partie php-->
            <?php
            //mise en place du compteur//
            $n = 0;
            //boucle foreach $_POST pour lire et récupérer le nombre d'arguments et création de la variale $arg avec as et utilisation du compteur// 
            foreach ($_POST as $arg){
                $n++;
            }
            //affichage avec echo du nombre d'arguments trouvé avec la fonction $_POST et affichage par le biais de la variable du compteur $n// 
            echo "le nombre d'arguments POST envoyé $n";
        ?>                
            </Form>

        </main>
        <footer>
            
        </footer>
    </body>    
</html>

