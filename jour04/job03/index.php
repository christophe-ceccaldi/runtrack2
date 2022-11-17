<!DOCTYPE
<html>
    <head>
      <meta charset="UTF-89">  
    </head>
    <body>
        <header>

        </header>
        <main>
            <Form method="post">
                <input type="text" id="name" name="nom"/>
                <input type="text" id="prenom" name="prénom"/>
                <input type="submit" id="button" />
                <?php
            $n = 0;
            foreach ($_POST as $arg){
                $n++;
            } 
            echo "le nombre d'arguments POST envoyé $n";
        ?>                
            </Form>

        </main>
        <footer>
            
        </footer>
    </body>    
</html>

