<?php
require('../sofianedjm/Controllers/Controller.php');

if (isset($_GET['action'])) {

    if ($_GET['action'] === 'listFormulaire') {
        listFormulaire();
    }

    elseif ($_GET['action'] === 'addFormulaire'){
         addFormulaire();
    }

    elseif ($_GET['action'] === 'list5Formulaire'){
        list5Formulaire();
    }
else {
    router();
}
}
?>