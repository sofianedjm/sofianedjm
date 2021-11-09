<?php
require('../sofianedjm/Controllers/Controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'listFormulaire') {
        listFormulaire();
    }
    elseif ($_GET['action'] === 'addFormulaire'){
        addFormulaire();
    }
}
else {
    router();
}

?>