<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <header>
    <?php
    session_start();
    
    if (!isset($_SESSION['prenom'])) {
        //mise en place du compteur//
        $_SESSION['prenom']  = [];
    }
    //reset prénom avec boutton//
    if (isset($_GET['reset'])){
        $_SESSION['prenom'] = [];
    }
    //incrémentation du compteur//
    $_SESSION['prenom']++;

    echo $_SESSION['prenom'];

    

    
    
    
    ?>

    </header>
    <body>
            <!--créatiion formulaireinput texte  pour button reset-->
            <form action="" method="get">
            <input ype="text" id="nom" name="nom"/>
            <input type="submit" id="button" name="reset"/>
        </form>
    </body>
</html>