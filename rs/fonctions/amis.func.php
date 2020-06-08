<?php
	//fonction qui vas recupere la liste des amis de expediteur
	function list_amis_exp(){
		global $db;
		$results = array();
		$query=$db->query("SELECT pseudo_dest,avatar FROM amis
			INNER JOIN utilisateurs ON utilisateurs.pseudo=amis.pseudo_dest
			WHERE pseudo_exp='{$_SESSION['pseudo']}' AND active=1
			");
		while ($row=$query->fetch()) {
			$results[]=$row;
		}
		return $results;
	}
	//fonction qui vas recupere la liste des amis du destinataire
	function list_amis_dest(){
		global $db;
		$results = array();
		$query=$db->query("SELECT pseudo_exp,avatar FROM amis
			INNER JOIN utilisateurs ON utilisateurs.pseudo=amis.pseudo_exp
			WHERE pseudo_dest='{$_SESSION['pseudo']}' AND active=1
			");
		while ($row=$query->fetch()) {
			$results[]=$row;
		}
		return $results;
	}
?>