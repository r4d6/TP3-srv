<?php
include('bdService.php');
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

try
{
   $maBD = new bdService();
   $sel = "select * from taches";
   $tabTac = $maBD->selection($sel);
   
   echo json_encode($tabTac);
}

catch(Exception $e)
{
	echo "Erreur 9: " . $e->getMessage();
}
