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

    

    //mise en place du compteur avec $_COOKIE//
    if (!isset($_COOKIE['nbvisites'])) {
        setcookie('nbvisites', '0', time() + 3600, '/'); 
    
    };

    $cookie_val =  (int) $_COOKIE['nbvisites'] + 1;

    if (isset($_GET['reset'])){
        $cookie_val = 0;
    } 
    

    setcookie('nbvisites', $cookie_val, time() + 3600, '/'); 

    

    echo $cookie_val;
     
    
    
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