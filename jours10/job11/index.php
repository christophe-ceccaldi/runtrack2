<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>job11</title>
    </head>
    <body>
        <?php
       
            $job11sqli = new mysqli("localhost", "root", "", "jour09") ; 
            $result = $job11sqli->query("SELECT AVG (capacite) FROM `salles`");
            
            $result = $result->fetch_all();
        //echo '<pre>';
            //var_dump($result);
        //echo '</pre>';

       ?>
       
        <table>
        
            <thead>
                <tr> <th>Capacite_moyenne_des_salles</th></tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $value){
                    echo "
                        <tr>
                            <td>$value[0]</td>
                            
                        </tr>";
                }
                    ?>
                    
            </tbody>
            
        </table>


        
    </body>
    </html>