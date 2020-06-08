<?php
	//la fonction qui dois recupere les information de la pesonne choisir par utilisateur
	function recupere_info_membre_choisi(){
		global $db;
		$results=array();
		$pseudo=htmlspecialchars($_GET['pseudo']);
		$query=$db->query("SELECT * FROM utilisateurs WHERE pseudo='$pseudo'");
		while ($row=$query->fetch()) {
			$results[]=$row;
		}
		return $results;
	}
	//la fonction qui verifie si une demande existe entre deux membres
	function demande_existe(){
		global $db;
		$query=$db->query("SELECT id_invitation FROM amis WHERE (pseudo_exp='{$_SESSION['pseudo']}' AND pseudo_dest='{$_GET['pseudo']}')
			OR
			(pseudo_exp='{$_GET['pseudo']}' AND pseudo_dest='{$_SESSION['pseudo']}')");
		$count=$query->rowCount();
		return $count;
	}
	//la function qui dois verifire si le destinataire a accepté la demande

	function accepter_demande(){
		global $db;
		$query=$db->query("SELECT active FROM amis WHERE (pseudo_exp='{$_SESSION['pseudo']}' AND pseudo_dest='{$_GET['pseudo']}') OR (pseudo_exp='{$_GET['pseudo']}' AND pseudo_dest='{$_SESSION['pseudo']}')");
		while ($rows=$query->fetch()) {
			if ($rows['active']==0) {
				return 0;
			}else{
				return 1;
			}
		}
	}
	//function qui dois verifier si le membre connecter est expediteur
	function verifier_expediteur(){
		global $db;
		$query=$db->query("SELECT id_invitation FROM amis WHERE pseudo_exp='{$_SESSION['pseudo']}' AND pseudo_dest='{$_GET['pseudo']}'");
		$count=$query->rowCount();
		return $count;
	}
?>