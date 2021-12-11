<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <link href="assets/img/favicon.png" rel="icon">
         <link rel="stylesheet" href="assets/css/list5Formulaire.css"/>
         <title>Vue des 5 derniers formulaires</title>
    </head>
    <body>
    <pre>
    <?php
    echo "<table>";
    echo "<tr><th>id</th><th>nom</th><th>email</th><th>sujet</th><th>message</th></tr>";
        foreach($nbInfos as $v)
        {
            echo "<tr>";
            echo "<td>" . $v->getId() . "</td>" ;
            echo "<td>" . $v->getNom() . "</td>" ;
            echo "<td>" . $v->getEmail() . "</td>";
            echo "<td>" . $v->getSujet() . "</td>";
            echo "<td>" . $v->getMessage() . "</td>";
            echo "</tr>";
        }
        echo "<caption>Affichage des 5 derniers formulaires enregistrés</caption>";
        echo "</table>";
    ?>
    </pre>
    </body>
</html>