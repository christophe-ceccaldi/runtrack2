
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>job12</title>
    </head>
    <body>
        <?php
       
        $job12sqli = new mysqli("localhost", "root", "", "jour09") ; 
        $result = $job12sqli->query("SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-11-24' AND '2018-11-24'");
        
        $result = $result->fetch_all();
       //echo '<pre>';
        //var_dump($result);
       //echo '</pre>';

       ?>
       
        <table>
        
            <thead>
                <tr> <th>Prenom</th> <th>nom</th> <th>Naissance</th> </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $value){
                    echo "
                        <tr>
                        <td>$value[0]</td>
                        <td>$value[1]</td>
                        <td>$value[2]</td>
                        </tr>";
                }
                    ?>
                    
            </tbody>
            
        </table>


        
    </body>
    </html>