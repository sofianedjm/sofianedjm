<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link href="assets/img/favicon.png" rel="icon">
        <title>Affichage des 5 derniers formulaires enregistrés</title>
    </head>
    <body>

    <h2>Affichage des 5 derniers formulaires enregistrés</h2>
        <?php
            foreach($nbInfos as $row){
                echo '</br>' . '<u>id</u>: ' . $row["id"] . '</br>' . '<u>nom de l\'expéditeur</u>: ' . $row["nom"] . '</br>' . '<u>@Mail</u>: ' . $row["email"] . '</br>' . '<u>Subject</u>: ' . $row["sujet"] . '</br>' . '<u>Message</u> : ' . $row["message"] . '</br>'  ;
              } 
        ?>
    </body>
</html>