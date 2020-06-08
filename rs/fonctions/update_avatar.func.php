<?php
	//fonction qui vas changer image de profile du membre
	function modifie_image_profile($avatar_tmp,$avatar){
		global $db;
		move_uploaded_file($avatar_tmp, 'avatar/'.$avatar);
		$query=$db->query("UPDATE utilisateurs SET avatar='{$_FILES['avatar']['name']}' WHERE pseudo='{$_SESSION['pseudo']}'");
	}
?>