<?php 

require('../sofianedjm/Repository/ContactRepository.php');

setlocale(LC_TIME, 'fra_fra');
session_start();

class ContactController {
    
    function listFormulaire(){
    $m = ContactRepository::getPost();
    $nbInfos = $m->getNbFormulaire();
    include_once ('../sofianedjm/Views/view_listFormulaire.php');
    }

    function list5Formulaire(){
    $m = ContactRepository::getPost();
    $nbInfos = $m->getNb5Formulaire();
    include_once('../sofianedjm/Views/view_list5Formulaire.php');
    }

    function addFormulaire() {
    $m = ContactRepository::getPost();
    $m->create_formulaire();
    include_once('../sofianedjm/Views/view_addFormulaire.php');
    }

    function deleteFormulaire(){
    $m = ContactRepository::getPost();
    $m->deleteLastFormulaire();
    include_once('../sofianedjm/Views/view_deleteFormulaire.php'); 
    }

    function router() {
    include_once('../sofianedjm/index.php');
    }
}

?>