<h1>inscription</h1>

<?php
	if (isset($_POST['submit'])) {
		$sexe=htmlspecialchars(trim($_POST['sexe']));
		$situation=trim($_POST['situation']);
		$pseudo=trim($_POST['pseudo']);
		$password=trim($_POST['password']);
		$repeatpassword=trim($_POST['repeatpassword']);
		$email=trim($_POST['email']);
		$apropos=trim($_POST['apropos']);
		/*$sexe=mysql_real_escape_string(htmlentities($_POST['sexe']));
		$situation=mysql_real_escape_string(htmlentities($_POST['situation']));
		$pseudo=mysql_real_escape_string(htmlentities($_POST['pseudo']));
		$password=mysql_real_escape_string(htmlentities($_POST['passsword']));
		$repeatpassword=mysql_real_escape_string(htmlentities($_POST['repeatpassword']));
		$email=mysql_real_escape_string(htmlentities($_POST['email']));
		$apropos=mysql_real_escape_string(htmlentities($_POST['apropos']));*/

		if (empty($pseudo)) {
			$errors[]="veillez saisir un pseudo,";
		}
		if (pseudo_existe($pseudo)) {
			$errors[]="$pseudo existe deja veillez choisir un autre pseudo,";
		}
		if (empty($password)) {
			$errors[]="veillez saisir un password,";
		}
		if ($password!=$repeatpassword) {
			$errors[]="vos deux password doivent etre identique,";
		}
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$errors[]="votre adress email n'est pas correct,";
		}
		if (email_existe($email)) {
			$errors[]="$email existe deja <br>Aviez vousoublie votre <a href='#'>passeword</a>,";
		}
		if (empty($apropos)) {
			$errors[]="veillez vous decrir en quelque lignes.";
		}
		
		if (!empty($errors)) {
			foreach ($errors as $error) {
				echo "<div class='error'>".$error."</div>";
			}
		}else{
			inscrire_utilisateur($pseudo,$password,$email,$sexe,$situation,$apropos);
			die('inscription terminer vous pouvez vous <a href="index.php?page=login">connecter</a>');
		}
	}
?>
<meta charset="utf-8">
<form method="POST" action="">
	
	<label for="sexe">Sexe</label>
	<select name="sexe">
		<?php echo isset($sexe) ? '<option value='.$sexe.'>'.$sexe.'</option>' : '';?>
		<?php echo $sexe!="Homme" ? '<option value="Homme">Homme</option>' : '';?>
		<?php echo $sexe!="Femme" ? '<option value="Femme">Femme</option>' : '';?>
	</select><br><br>
	<label for="situation">Situation</label>
	<select name="situation">
		<?php echo isset($situation) ? '<option value='.$situation.'>'.$situation.'</option>' : '';?>
		<?php echo $situation!="Célibataire" ? '<option value="Célibataire">Célibataire</option>' : '';?>
		<?php echo $situation!="En couple" ? '<option value="En couple">En couple</option>' : '';?>
		<?php echo $situation!="Divorcé" ? '<option value="Divorcé(e)">Divorcé(e)</option>' : '';?>
		<?php echo $situation!="Veuf(ve)" ? '<option value="Veuf(ve)">Veuf(ve)</option>' : '';?>
	</select><br><br>
	<label for="pseudo">Votre pseudo :</label>
	<input type="text" name="pseudo" value='<?php echo isset($pseudo) ? $pseudo : '';?>'><br>
	<label for="password">Votre password :</label>
	<input type="password" name="password"><br>
	<label for="repeatpassword">Repetez votre password :</label>
	<input type="password" name="repeatpassword"><br>
	<label for="email">Veillez saisir votre email :</label>
	<input type="text" name="email" value="<?php echo isset($email) ? $email : '';?>"><br>
	<label for="apropos">A Propos de vous</label>
	<textarea rows="6" cols="30" name="apropos"><?php echo isset($apropos) ? $apropos : '';?></textarea><br><br>
	<input type="submit" name="submit" value="Sinscrire">
</form>
<a href="index.php?page=login">Retour à la page de connexion</a>