
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>job13</title>
    </head>
    <body>
        <?php
       
        $job13sqli = new mysqli("localhost", "root", "", "jour09") ; 
        $result = $job13sqli->query("SELECT nom, id_etage FROM salles");
        
        $result = $result->fetch_all();
       //echo '<pre>';
        //var_dump($result);
       //echo '</pre>';

       ?>
       
        <table>
        
            <thead>
                <tr> <th>Nom salle</th> <th>Nom etage</th> </tr>
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