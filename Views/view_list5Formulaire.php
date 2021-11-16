<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link href="assets/img/favicon.png" rel="icon">
        <title>Affichage des différents formulaires enregistrés</title>
    </head>
    <body>

    <h2>Affichage des différents formulaires</h2>
        <?php
            foreach($nbInfos as $row){
                echo $row["id"] . '</br>'  . $row["nom"] . '</br>' . $row["email"] . '</br>' . $row["sujet"] . '</br>' . $row["message"] . '</br>'  ;
              } 
        ?>
    </body>
</html>