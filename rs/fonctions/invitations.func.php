<?php
	//la fonction qui vas recupere les invitations
	function recuperer_invitations(){
		global $db;
		$query=$db->query("SELECT pseudo_exp,date_invitation,active,avatar 
			FROM amis 
			INNER JOIN utilisateurs ON utilisateurs.pseudo=amis.pseudo_exp 
			WHERE pseudo_dest='{$_SESSION['pseudo']}' 
			ORDER BY date_invitation DESC
			");
		$results=array();
		while ($row=$query->fetch()) {
			$results[]=$row;
		}
		return $results;
	}
?>