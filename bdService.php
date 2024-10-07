<?php
include('outils.php');


class bdService
{
	private $bdInterne;
	function __construct()
	{
		$this->bdInterne = new mysqli(SERVEUR, UTILISATEUR, MOT_DE_PASSE, BD);
	}
	
	function insertion($req)
	{
		$res = $this->bdInterne->query($req);
		return $this->bdInterne->insert_id;
	}
	
	function selection($req)
	{
		$tabRes = array();
		
		$res = $this->bdInterne->query($req);
		if (!$res)
		{
			throw new Exception("Erreur d'un select $req");
		}
		while ($enregCourant = $res->fetch_array(MYSQLI_ASSOC))
			$tabRes[] = $enregCourant;
	
		return $tabRes;
	}
}