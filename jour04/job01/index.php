<!DOCTYPE html>
<html>
    <body>
            <form action="" method="get">
                <label for="name">name</label>
                <input type="text" id="name" name="nom"/>
                <input type="text" id="prenom" name="prénom"/>
                <input type="submit" id="button" />
            </form>
        <?php
            $n = 0;
            foreach ($_GET as $arg){
                $n++;
            } 
            echo "le nombre d'arguments GET envoyé $n";
        ?>
        
    </body>
</html>