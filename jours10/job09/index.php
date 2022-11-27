<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>job09</title>
    </head>
    <body>
        <?php
       
            $job09sqli = new mysqli("localhost", "root", "", "jour09") ; 
            $result = $job09sqli->query("SELECT * FROM salles ORDER BY capacite DESC");
            
            $result = $result->fetch_all();
        //echo '<pre>';
            //var_dump($result);
        //echo '</pre>';

       ?>
       
        <table>
        
            <thead>
                <tr> <th>Capacite_decroissante_des_salles</th></tr>
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