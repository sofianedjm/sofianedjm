<?php
require('../sofianedjm/Controllers/Controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'listFormulaire') {
        listFormulaire();
    }
    elseif ($_GET['action'] === 'addFormulaire'){
        if (isset($_GET['id']) && $_GET['id'] > 0){
            if (!empty($_POST['nom']) && !empty($_POST['message'])){
                addFormulaire($_GET['id'],$_GET_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']);
            }
        }
    }
    elseif ($_GET['action'] === 'list5Formulaire'){
        list5Formulaire();
    }
}
else {
    router();
}

?>