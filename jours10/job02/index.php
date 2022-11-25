<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
       
        $secondsqli = new mysqli("localhost", "root", "", "jour09") ; 
        $result = $secondsqli->query("SELECT nom, capacite FROM salles");
        
        $result = $result->fetch_all();
       echo '<pre>';
        var_dump($result);
       echo '</pre>';

       ?>
       
        <table>
        
            <thead>
                <tr> <th>Nom</th> <th>capacité</th></tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $value){
                    echo "
                        <tr>
                        <td>$value[0]</td>
                        <td>$value[1]</td>
                        </tr>";
                }
                    ?>
                    
            </tbody>
            
        </table>


        
    </body>
    </html>