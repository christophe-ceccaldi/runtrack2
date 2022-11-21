<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
 
    <link rel="stylesheet" type="text/css" href="<?php echo $_GET['multi']?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Rubik+Distressed&family=Rubik+Glitch&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
        <form method="get">
            <label> Quelle style voulez-vous choisir ?</label>
            <select name="multi" id="multi" value="style03">
            <option value="style01">Style 01</option>
            <option value="style02">Style 02</option>
            <option value="style03">Style 03</option>
            </select>
            <input type="submit" id="button"/>
        </form>
    </main>
</body>
</html>