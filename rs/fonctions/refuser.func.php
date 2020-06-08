<?php
	//la fonction qui dois refuseer l'invitation
	function refuser_invitation(){
		global $db;
		$mysql=$db->query("DELETE FROM amis WHERE pseudo_exp='{$_GET['pseudo']}' AND pseudo_dest='{$_SESSION['pseudo']}'");
	}
?>