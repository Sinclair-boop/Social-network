<?php
	//la fonction qui dois supprimer l'invitation
function suprimer_invitation(){
	global $db;
	$query=$db->query("DELETE FROM amis WHERE pseudo_exp='{$_SESSION['pseudo']}' AND pseudo_dest='{$_GET['pseudo']}'");
}
?>