<?php
  //-----------------------------------
  //   Fichier :  getCommPourUnDev.php
  //   Par:      David Moussette
  //   Date :    2024-12-10
  //   Modifié par :  
  //-----------------------------------


include('bdService.php');
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');


$idDev = $_POST['idDev'];

try
{
   $maBD = new bdService();
   $sel = "select * from commentaires COMM where COMM.idDev = $idDev";
  
   
   $tabComm = $maBD->selection($sel);
   
   echo json_encode($tabComm);
}

catch(Exception $e)
{
	echo "Erreur 18: " . $e->getMessage();
}
