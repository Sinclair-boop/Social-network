<?php
	include("fonctions/membre.func.php");
	include("body/header.php");
	include("body/menu.php");
?>
<h3>Vos invitation</h3>
<?php
	$invitations=recuperer_invitations();
	if ($invitations==true) {
		foreach ($invitations as $invitation) {
			if ($invitation['active']==0) {
			
				?>
					<img src='avatar/<?php echo $invitation['avatar'];?>' height='100' width='100' alt='avatar'>
					<div class="error">
						<?php echo $invitation['pseudo_exp']?> a voulu vous ajouter comme ami(e)<br>
						<a href='index.php?page=accepter&pseudo=<?php echo $invitation['pseudo_exp'];?>'>Accepter |</a><a href='index.php?page=refuser&pseudo=<?php echo $invitation['pseudo_exp'];?>'> Refuser</a>
					</div>
				<?php

			}else{
				?>
					<div class="success">vous etez desomain amie avec <?php echo $invitation['pseudo_exp']?></div>
				<?php
			}
		}
		
	}else{
		?>
			<div class="error">Vous n'avez pas d'invitation</div>
		<?php
	}
?>