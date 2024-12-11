<?php

  //-----------------------------------
  //   Fichier :  getCommentaires.php
  //   Par:      Alain Martel
  //   Date :    2024-12-11
  //   Modifié par :  David Moussette
  //-----------------------------------

include('bdService.php');
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

try
{
   $maBD = new bdService();
   $sel = "select * from commentaires";
   $tabDev = $maBD->selection($sel);
   
   echo json_encode($tabDev);
}

catch(Exception $e)
{
	echo "Erreur 9: " . $e->getMessage();
}
