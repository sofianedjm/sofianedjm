<?php
require('../sofianedjm/Controllers/Controller.php');

if (isset($_GET['action'])) {

    if ($_GET['action'] === 'listFormulaire') {
        listFormulaire();
    }

    elseif ($_GET['action'] === 'addFormulaire'){
         addFormulaire($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']);
    }

    elseif ($_GET['action'] === 'list5Formulaire'){
        list5Formulaire();
    }
else {
    router();
}
}
?>