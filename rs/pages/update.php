<?php
	include('fonctions/membre.func.php');
	//include('fonctions/update.func.php');
	include('body/header.php');
	include('body/menu.php');
	if (isset($_POST['submit'])) {
		function changer_infos_membres($email,$situation,$apropos){
		 global $db;
		 $query=$db->query("UPDATE utilisateurs SET email='$email',situation='$situation',apropos='$apropos' WHERE pseudo='{$_SESSION['pseudo']}'");
	}
		
		$situation=htmlspecialchars(trim($_POST['situation']));
        $email=htmlspecialchars(trim($_POST['email']));
		$apropos=htmlspecialchars(trim($_POST['apropos']));
		//changer_informations_membres($email,$situation,$apropos);
		changer_infos_membres($email,$situation,$apropos);
		header('Location:index.php?page=membre');
	}
	foreach ($infos as $info) {
		?>
		<h3>Changer vos informations</h3>
			<form method='POST' action=''>
				<label for="votre situation">Votre situation:</label>
				<select name="situation">
		<?php echo isset($info['situation']) ? '<option value='.$info['situation'].'>'.$info['situation'].'</option>' : '';?>
		<?php echo $info['situation']!="Célibataire" ? '<option value="Célibataire">Célibataire</option>' : '';?>
		<?php echo $info['situation']!="En couple" ? '<option value="En couple">En couple</option>' : '';?>
		<?php echo $info['situation']!="Divorcé" ? '<option value="Divorcé(e)">Divorcé(e)</option>' : '';?>
		<?php echo $info['situation']!="Veuf(ve)" ? '<option value="Veuf(ve)">Veuf(ve)</option>' : '';?>
				</select><br><br>
				<label for="email">Email:</label>
				<input type="text" name="email" value="<?php echo $info['email']?>"><br><br>
				<label for="apropos">Apropos:</label>
				<textarea name="apropos"><?php echo $info['apropos']?></textarea><br><br>
				<input type="submit" name="submit" value="changer">
			</form>
		<?php
	}
?>