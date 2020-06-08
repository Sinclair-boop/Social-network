<?php
	include("fonctions/membre.func.php");
	include("body/header.php");
	include("body/menu.php");
?>
<div class="info">
	<?php
		$infos_membres_choisis=recupere_info_membre_choisi();
		if ($infos_membres_choisis==true && $_GET['pseudo']!=$_SESSION['pseudo']) {
			foreach ($infos_membres_choisis as $info_membre_choisi) {
				if (demande_existe()==0) {
					?>
						<div class="error">Vous ètez pas ami(e) avec <?php echo $info_membre_choisi['pseudo']; ?><br>
							<a href="index.php?page=envoi&pseudo=<?php echo $info_membre_choisi['pseudo']; ?>">Envoyer une invitation</a>
						</div>
					<?php
				}elseif(accepter_demande()==0 && verifier_expediteur()==1){
					?>
						<div class="success">Demande envoyer<br>
						<a href='index.php?page=annuler&pseudo=<?php echo $info_membre_choisi['pseudo']; ?>'>Annuler demande</a>
						</div>
					<?php
				}elseif(accepter_demande()==0 && verifier_expediteur()==0){
					?>
						<div class="success">Demande en cour<br>"Verifie vos invitations"</div>
					<?

				}else{
			?>
				<img src="avatar/<?php echo $info_membre_choisi['avatar']; ?>" height="150" width="150" alt='avatar '>
				<p><strong>Email</strong>:<em><?php echo $info_membre_choisi['email']; ?></em></p>
				<p><strong>Sexe</strong>:<em><?php echo $info_membre_choisi['sexe']; ?></em></p>
				<p><strong>Situation</strong>:<em><?php echo $info_membre_choisi['situation']; ?></em></p>
				<p><strong>A propos de vous</strong>:<em><?php echo $info_membre_choisi['apropos']; ?></em></p>
			<?php
				}
			}
	
		}else{
			header("Location:index.php?page=membre");
		}
	?>
</div>