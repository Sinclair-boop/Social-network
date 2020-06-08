<div class="header">
	<?php
		include("fonctions/update.func.php");
		$infos=info_membres_connecter();
		foreach ($infos as $info) {
			echo "bien venue ".$info['pseudo'];
		}
		if (!isset($_SESSION['pseudo'])) {
			header('Location:inddex.php?page=login');
		}
	?>
	<a href="index.php?page=logou">Se deconnecter</a>
</div>