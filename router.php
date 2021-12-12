<?php
require_once('../sofianedjm/Controllers/ContactController.php');

if (isset($_GET['action'])) {

    $post = new ContactController();

    if ($_GET['action'] === 'listFormulaire') {
        return $post->listFormulaire();
    }
    elseif ($_GET['action'] === 'addFormulaire'){
        return $post->addFormulaire();
    }
    elseif ($_GET['action'] === 'list5Formulaire'){
        return $post->list5Formulaire();
    }
    elseif ($_GET['action'] === 'deleteFormulaire'){
        return $post->deleteFormulaire();
    }
    elseif ($_GET['action'] === 'updateFormulaire'){
        return $post->updateFormulaire();
    }

else {
    return $post->router();
}
}
?>