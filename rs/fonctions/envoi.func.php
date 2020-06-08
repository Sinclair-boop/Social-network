<?php
	//la fonction qui vas enregistrer invitation dans la bdd
	function enreg_invitation(){
		global $db;
		$query=$db->query("INSERT INTO amis(id_invitation,pseudo_exp,pseudo_dest,date_invitation,date_confirmation,active) VALUES('','{$_SESSION['pseudo']}','{$_GET['pseudo']}',NOW(),'',0)");
	}
	
?>