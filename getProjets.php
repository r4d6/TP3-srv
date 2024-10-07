<?php
include('bdService.php');
header('Content-type: application/json');

try
{
   $maBD = new bdService();
   $sel = "select * from projets";
   $tabProj = $maBD->selection($sel);
   
   echo json_encode($tabProj);
}

catch(Exception $e)
{
	echo "Erreur 9: " . $e->getMessage();
}
