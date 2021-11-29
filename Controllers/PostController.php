<?php 

require('../sofianedjm/Models/PostRepository.php');

setlocale(LC_TIME, 'fra_fra');
session_start();

class PostController {
    
    function listFormulaire(){
    $m = Post::getPost();
    $nbInfos = $m->getNbFormulaire();
    include_once ('../sofianedjm/Views/view_listFormulaire.php');
    }

    function list5Formulaire(){
    $m = Post::getPost();
    $nbInfos = $m->getNb5Formulaire();
    include_once('../sofianedjm/Views/view_list5Formulaire.php');

    }

    function addFormulaire() {
    $m = Post::getPost();
    $m->create_formulaire();
    include_once('../sofianedjm/Views/view_addFormulaire.php');
    }

    function deleteFormulaire(){
    $m = Post::getPost();
    $m->deleteLastFormulaire();
    include_once('../sofianedjm/Views/view_deleteFormulaire.php'); 
    }

    function router() {
    require ('../sofianedjm/index.php');
    }
}

?>