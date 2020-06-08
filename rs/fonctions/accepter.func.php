<?php
	//la fonction qui vas accepter l'invitation
function accepter_invitation(){
	global $db;
	$un=1;
	$query=$db->prepare('UPDATE amis SET active=:un,date_confirmation=:now 
		WHERE pseudo_exp=:pseudo_exp AND pseudo_dest=:pseudo_dest');
	$query=$db->prepare('UPDATE amis SET active=:un,date_confirmation=:now 
		WHERE pseudo_exp=:pseudo_exp AND pseudo_dest=:pseudo_dest');
	$query->execute(array(':un'=>1 ,':now'=>date("d/m/y"),':pseudo_exp'=>$_GET["pseudo"],':pseudo_dest'=>$_SESSION["pseudo"] ));

} 
?>