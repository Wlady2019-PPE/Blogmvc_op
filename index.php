<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php

        // connexxion à la base de données 
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=Blogmvc_op;charset=UTF-8', 'root','');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $req =  $bdd -> query ('select id , title ,content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM

         posts ORDER BY creation_date DESC LIMIT 0,5');

         return $req;
        ?>

        


    
</body>
</html>