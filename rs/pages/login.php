<h1>Connexion</h1>
<?php
	if (isset($_POST['submit'])) {
		if (empty($_POST['pseudo'])) {
			$errors[]='veuillez saisir votre pseudo';
		}
		if (empty($_POST['password'])) {
			$errors[]='veuillez saisir votre password';
		}
		if (!empty($errors)) {
			foreach ($errors as $error) {
				echo "<div class='error'>".$error."</div>";
			}
		}else{
			if (verifie_combinaison_psaudo_password($_POST['pseudo'],$_POST['password'])==0) {
				echo "<div class='error'>pseudo ou password incorect</div>";
			}else{
				$_SESSION['pseudo']=$_POST['pseudo'];
				header('Location:index.php?page=membre');
			}
		}
	}
?>
<form method="POST" action="">
	<label for="pseudo">Votre pseudo :</label>
	<input type="text" name="pseudo"><br>
	<label for="password">Votre password :</label>
	<input type="password" name="password"><br>
	<input type="submit" name="submit" value="Se connecter">
</form>
<a href="index.php?page=register">Pas encore membre</a>