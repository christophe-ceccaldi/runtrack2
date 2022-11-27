
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>job04</title>
    </head>
    <body>
        <?php
       
        $job04sqli = new mysqli("localhost", "root", "", "jour09") ; 
        $result = $job04sqli->query("SELECT prenom, nom, naissance, sexe, email FROM etudiants WHERE prenom LIKE 'T%'");
        
        $result = $result->fetch_all();
       //echo '<pre>';
        //var_dump($result);
       //echo '</pre>';

       ?>
       
        <table>
        
            <thead>
                <tr> <th>Prenom</th> <th>nom</th> <th>Naissance</th> <th>sexe</th> <th>email</th></tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $value){
                    echo "
                        <tr>
                        <td>$value[0]</td>
                        <td>$value[1]</td>
                        <td>$value[2]</td>
                        <td>$value[3]</td>
                        <td>$value[4]</td>
                        </tr>";
                }
                    ?>
                    
            </tbody>
            
        </table>


        
    </body>
    </html>