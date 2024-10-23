<?php
include('bdService.php');
//header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');


$idSessTrav = $_POST['idSessTrav'];

try
{
   $maBD = new bdService();
   $fin = date('Y-m-d H:i:s');
   $upd = "update sessionsTravail set fin = '$fin' where id = $idSessTrav";
   $nbSessTravMAJ = $maBD->miseAJour($upd);
   
   echo json_encode($nbSessTravMAJ);
}

catch(Exception $e)
{
	echo "Erreur 22: " . $e->getMessage();
}
