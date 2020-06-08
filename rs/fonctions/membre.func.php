<?php
	//fonction qui retourn les informatons de utilisateur connecter
	function info_membres_connecter(){
		global $db;
		$infos=array();
		$pseudo=$_SESSION['pseudo'];
		$query=$db->query("SELECT * FROM utilisateurs WHERE pseudo='$pseudo'");
		while ($row=$query->fetch()) {
			$infos[]=$row;
		}
		return $infos;
	}
	//la fonction qui vas compter le nombre de personnes inscrit
	function nombre_membres(){
		global $db;
 	$existe=$db->query("SELECT id FROM utilisateurs");
 	$count=$existe->rowCount();
 	return $count;
	}
?>