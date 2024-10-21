<?php
include('bdService.php');
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');


$idDev = $_POST['idDev'];

try
{
   $maBD = new bdService();
   $sel = "select * from sessionsTravail where idDev = $idDev";
   $tabSessTrav = $maBD->selection($sel);
   
   echo json_encode($tabSessTrav);
}

catch(Exception $e)
{
	echo "Erreur 18: " . $e->getMessage();
}
