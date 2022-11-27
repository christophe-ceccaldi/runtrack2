<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>job01</title>
    </head>
    <body>
        <?php
       
        $firstsqli = new mysqli("localhost", "root", "", "jour09") ; 
        $result= $firstsqli->query("SELECT prenom, nom, naissance, sexe, email FROM etudiants") ;
        $result = $result-> fetch_all();
        //var_dump($result);
       ?>
       
        <table>
        
            <thead>
                <tr> <th>Prenom</th> <th>Nom</th> <th>Naissance</th> <th>Sexe</th> <th>Email</th> </tr>
                </thead>



            
            <!--<td></td>-->
            <tbody>
            <tr> 
                <td><?php print_r($result[0][0]);?></td> 
                <td><?php print_r($result[0][1]);?></td>
                <td><?php print_r($result[0][2]);?></td>
                <td><?php print_r($result[0][3]);?></td>
                <td><?php print_r($result[0][4]);?></td>
            </tr>
            <tr> 
                <td><?php print_r($result[1][0]);?></td> 
                <td><?php print_r($result[1][1]);?></td>
                <td><?php print_r($result[1][2]);?></td>
                <td><?php print_r($result[1][3]);?></td>
                <td><?php print_r($result[1][4]);?></td>
            </tr>
            <tr> 
                <td><?php print_r($result[2][0]);?></td> 
                <td><?php print_r($result[2][1]);?></td>
                <td><?php print_r($result[2][2]);?></td>
                <td><?php print_r($result[2][3]);?></td>
                <td><?php print_r($result[2][4]);?></td>
            </tr>
            <tr> 
                <td><?php print_r($result[3][0]);?></td> 
                <td><?php print_r($result[3][1]);?></td>
                <td><?php print_r($result[3][2]);?></td>
                <td><?php print_r($result[3][3]);?></td>
                <td><?php print_r($result[3][4]);?></td>
            </tr>
            <tr> 
                <td><?php print_r($result[4][0]);?></td> 
                <td><?php print_r($result[4][1]);?></td>
                <td><?php print_r($result[4][2]);?></td>
                <td><?php print_r($result[4][3]);?></td>
                <td><?php print_r($result[4][4]);?></td>
            </tr>
            
            
            </tbody>
            
        </table>

    
        
    </body>
</html>