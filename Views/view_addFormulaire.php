<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link href="assets/img/favicon.png" rel="icon">
         <link rel="stylesheet" href="assets/css/view_addFormulaire.css">
        <title>Formulaire</title>
    </head>
    <body>
    <div class="reponse">
    <h2 align='center'>Validation du formulaire ✔️</h2>
        <?php
            echo "<p align='center'><strong>Nom</strong> : $_POST[nom] | <strong>Email</strong> : $_POST[email] | <strong>Sujet</strong> : $_POST[sujet] | <strong>Message</strong> : $_POST[message] </p>"
        ?>
    </div>
    </body>
</html>