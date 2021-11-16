<?php 

require('../sofianedjm/Models/Model.php');
require('../sofianedjm/Controllers/form.php');

setlocale(LC_TIME, 'fra_fra');
session_start();


function listFormulaire(){
$m = Model::getModel();
$nbInfos = $m->getNbFormulaire();
include_once ('../sofianedjm/Views/view_listFormulaire.php');
}

function list5Formulaire(){
$m = Model::getModel();
$nbInfos = $m->getNb5Formulaire();
include_once('../sofianedjm/Views/view_list5Formulaire.php');

}

function addFormulaire($nom, $email, $sujet, $message) {
$m = Model::getModel();
$m->getAddFormulaire('$nom', '$email', '$sujet', '$message');
echo $m;
}

function router() {
 require ('../sofianedjm/index.php');
}

?>