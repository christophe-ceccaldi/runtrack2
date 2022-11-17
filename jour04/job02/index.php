<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>

    <body>

        <form action="" method="get">
            <input type="text" id="prenom" name="prenom"/>
            <input type="text" id="nom" name="nom"/>
            <input type="submit" id="button"/>
        </form>

        <table>
            <thead>
                <tr><th>arguments</th> <th>valeurs</th></tr>
            </thead>

            <tbody>
                <?php
                foreach ($_GET as $key => $value){
                    echo "<tr><td>$key</td> <td>$value</td></tr>";
                } 
            
                ?>
            </tbody>
        </table>
        
        
        
    </body>
</html>