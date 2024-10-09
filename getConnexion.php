<?php
include('bdService.php');
//header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

$mat = $_POST['mat'];
$mdp = $_POST['mdp'];

try
{
   $maBD = new bdService();
   $sel = "select * from developpeurs where matricule = '$mat'";
   $tabDev = $maBD->selection($sel);
   
   if (isset($tabDev[0]['motDePasse'] ) )
   { 	 
      if ($tabDev[0]['motDePasse'] == $mdp)
	  {
         echo json_encode($tabDev[0]);
	  }
	  else
		 echo ""; 
   }
   else
   {
	   echo "";
   }
}

catch(Exception $e)
{
	echo "Erreur 9: " . $e->getMessage();
}
