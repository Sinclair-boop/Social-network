<?php
	//verifie combinaispn pseudo password
	function verifie_combinaison_psaudo_password($pseudo,$password){
		global $db;
		$pseudo=htmlspecialchars(trim($_POST['pseudo']));
		$password=htmlspecialchars(trim($_POST['password']));
		$query=$db->query("SELECT pseudo,password FROM utilisateurs WHERE pseudo='$pseudo' AND password='$password'"); 
		$rows=$query->rowCount();
		return $rows;
	}
?>