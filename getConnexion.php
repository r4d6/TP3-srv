<?php
include('bdService.php');
//header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

$mat = $_GET['mat'];
$mdp = $_GET['mdp'];

try
{
   $maBD = new bdService();
   $sel = "select * from developpeurs where matricule = '$mat'";
   $tabDev = $maBD->selection($sel);
   var_dump($tabDev);
   die("ln 15");
   
   
   
   echo json_encode($tabTac);
}

catch(Exception $e)
{
	echo "Erreur 9: " . $e->getMessage();
}
