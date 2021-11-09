<?php 

require('../sofianedjm-main/Models/Model.php');
require('../sofianedjm-main/Models/form.php');

setlocale(LC_TIME, 'fra_fra');
session_start();


function listFormulaire(){
$m = Model::getModel();
$nbInfos = $m->getNbFormulaire();
echo $nbInfos;
}

function addFormulaire() {
$m = new Form($_POST['name'],$_POST['email'],$_POST['sujet'],$_POST['message']);
$m->addFormulaireInfos();
echo $m;
}

function router() {
 require ('../sofianedjm-main/index.php');
}


?>