<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
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
                foreach ($_POST as $key => $value){
                    echo "<tr><td>$key</td> <td>$value</td></tr>";
                } 
            
                ?>
            </tbody>
        </table>
        
        
        
    </body>
</html>