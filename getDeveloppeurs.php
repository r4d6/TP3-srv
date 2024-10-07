<?php
include('bdService.php');
header('Content-type: application/json');

try
{
   $maBD = new bdService();
   $sel = "select * from developpeurs";
   $tabDev = $maBD->selection($sel);
   
   echo json_encode($tabDev);
}

catch(Exception $e)
{
	echo "Erreur 9: " . $e->getMessage();
}
