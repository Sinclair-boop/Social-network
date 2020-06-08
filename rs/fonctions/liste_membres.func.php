<?php
	//la fonction qui dois recupere le pseude et lavatar du membre sauf pour cellui connecter
	function recupere_pseudo_avatar(){
		global $db;
		$results=array();
		$query=$db->query("SELECT pseudo,avatar FROM utilisateurs WHERE pseudo!='{$_SESSION['pseudo']}'");
		while ($row=$query->fetch()) {
			$results[]=$row;
		}
		return $results;
	}
?>