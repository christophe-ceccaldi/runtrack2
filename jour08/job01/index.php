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
    //ouverture de session//
    session_start();
    //création de mon nbvisites//
    if (!isset($_SESSION['nbvisites'])) {
        //mise en place du compteur//
        $_SESSION['nbvisites']  = 0;
    }
    //reset le nbvisites avec boutton//
    if (isset($_GET['reset'])){
        $_SESSION['nbvisites'] = 0;
    }
    //incrémentation du compteur//
    $_SESSION['nbvisites']++;
    //affichage du nombre de visite avec echo//
    echo 'Vous avez vu ' . $_SESSION['nbvisites'] . ' fois cette page';

    ?>

</header>
<body>
        <!--créatiion formulaire pour button reset-->
        <form method="get">
                    <label> boutton reset</label>
                    <input type="submit" id="button" name='reset'/>
        </form>
</body>
</html>