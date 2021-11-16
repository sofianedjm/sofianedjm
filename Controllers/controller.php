<?php 

require('../sofianedjm/Models/Model.php');
require('../sofianedjm/Controllers/form.php');

setlocale(LC_TIME, 'fra_fra');
session_start();


function listFormulaire(){
$m = Model::getModel();
$nbInfos = $m->getNbFormulaire();

echo "Le nombre de formulaire enregistré est de " . $nbInfos ;
}

function list25Formulaire(){
$m = Model::getModel();
$nbInfos = $m->getNb25Formulaire();

foreach($nbInfos as $row){
      echo $row["id"] . '</br>' . $row["nom"] . '</br>' . $row["email"] . '</br>' . $row["sujet"] . $row["message"]  ;
    } 
}

function addFormulaire() {
$m = new Form($_POST['name'],$_POST['email'],$_POST['sujet'],$_POST['message']);
$m->addFormulaireInfos();
echo $m;
}

function router() {
 require ('../sofianedjm/index.php');
}

?>